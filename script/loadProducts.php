<?php
include '../config/dbConn.php';
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

$xmlData = '<?xml version="1.0" encoding="UTF-8"?><products>';
while ($row = $result->fetch_assoc()) {
    $xmlData .= '<product>';
    $xmlData .= '<product_name>' . $row['product_name'] . '</product_name>';
    $xmlData .= '<price>' . $row['price'] . '</price>';
    $xmlData .= '</product>';
}
$xmlData .= '</products>';

header('Content-Type: application/xml');

echo $xmlData;

$conn->close();
?>
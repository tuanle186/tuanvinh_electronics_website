<?php
header('Content-Type: application/json');
// Replace this with your database connection logic
include 'database/dbConn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['query'])) {
    $query = $conn->real_escape_string($_POST['query']);

    $sql = "SELECT product_name FROM products WHERE product_name LIKE '$query%'";
    $result = $conn->query($sql);

    $suggestions = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $suggestions[] = $row['product_name'];
        }
    }

    echo json_encode($suggestions);
}

$conn->close();
?>

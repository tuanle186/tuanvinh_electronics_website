<?php
session_start();
include '../config/dbConn.php';

if (isset($_POST['searchTerm']) && isset($_POST['limit']) && isset($_POST['offset'])) {
    $searchTerm = $_POST['searchTerm'];
    $limit = $_POST['limit'];
    $offset = $_POST['offset'];

    $query = "SELECT * FROM products WHERE product_name LIKE '%$searchTerm%' LIMIT $offset, $limit";
    $products = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($products)) :
        ?>
        <tr>
            <td> <a class="title px-4" href="#"> <?php echo $row['product_name']; ?> </td>
            <td> <?php echo $row['price']; ?> VND</td>
        </tr>
    <?php
    endwhile;
}
?>

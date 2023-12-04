<?php
    session_start();
    include '../config/dbConn.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CVAS Professional Audio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="../assets/logo.jpg">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../style/style.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../script/script.js"></script>
    </head>
    <body>
        <?php include '../component/nav.php'; ?>
        <div class="container w-25 mt-5">
            <?php
            // DISPLAY LIST OF PRODUCTS
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo $row['product_name'] . " - " . $row['price'] . "<br>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </div>
    </body>
</html>


<!DOCTYPE html>
<html>
    <head>
        <title>CVAS Professional Audio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="logo_1.jpg">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="style/style.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="script/srcipt.js"></script>
    </head>

    <body>
        <?php include './nav_bar/nav.php' ?>
        <div class="container w-25 mt-5">
            <?php
                include './database/dbConn.php';
                $sql = 'SELECT * FROM products WHERE product_name="' . $_GET["q"] . '"';
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo $row['product_name'] . " - " . $row['price'] . "<br>";
                    }
                } else {
                    echo "Không tìm thấy kết quả";
                }

                $conn->close();
            ?>
        </div>
    </body>
</html>
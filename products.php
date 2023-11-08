<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CVAS Professional Audio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="logo_1.jpg">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="./style.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="myJS/myScrip.js"></script>
    </head>

    <body>
        <?php include './nav_bar/nav.php'; ?>
        <div class="container w-25 mt-5">
            <?php
            // CONNECT TO MYSQL
            include './database/dbConn.php';

            // CREATE A NEW DB "OnlineStore"
            $dbname = "OnlineStore";
            $sql = "CREATE DATABASE $dbname";
            if ($conn->query($sql) === TRUE) {
                echo "Database $dbname created succesfully";
            } else {
                echo "Error creating database: " . $conn->error;
            }

            // CREATE NEW TABLES
            mysqli_select_db($conn, "onlinestore");
            // Create "products" table
            $sql = "CREATE TABLE products (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            product_name VARCHAR(30) NOT NULL,
            price INT(8) UNSIGNED NOT NULL
            )";

            if ($conn->query($sql) === TRUE) {
                echo "Table created successfully";
            } else {
                echo "Error creating table: " . $conn->error;
            }

            // Create "users" table
            $sql = "CREATE TABLE users (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(30) NOT NULL,
            password CHAR(225) NOT NULL
            )";

            if ($conn->query($sql) === TRUE) {
                echo "Table created successfully";
            } else {
                echo "Error creating table: " . $conn->error;
            }


            // INSERT NEW PRODUCTS
            $sql = "INSERT INTO products (product_name, price)
            VALUES ('2400', '1290000')";

            if ($conn->query($sql) === TRUE) {
                echo "New product added successfully";
            } else {
                echo "Error adding new product: " . $conn->error;
            }

            // INSERT NEW USERS
            $username = 'tuanle186';
            $password = 'ronaldo';
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (username, password)
            VALUES ('$username', '$hash')";

            if ($conn->query($sql) === TRUE) {
                echo "New user added successfully";
            } else {
                echo "Error adding new user: " . $conn->error;
            }

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

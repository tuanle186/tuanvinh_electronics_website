<?php
$servername = "localhost";
$username = "root";
$password = ""; // no password
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// CREATE A NEW DATABASE
$dbname = "OnlineStore";
$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database $dbname created succesfully <br>";
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
    echo "Table created successfully <br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Create "users" table
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password CHAR(225) NOT NULL,
level INT(6) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully <br>";
} else {
    echo "Error creating table: " . $conn->error;
}


// INSERT NEW PRODUCTS
$sql = "INSERT INTO products (product_name, price)
VALUES ('2400', '1290000')";

if ($conn->query($sql) === TRUE) {
    echo "New product added successfully <br>";
} else {
    echo "Error adding new product: " . $conn->error;
}

// INSERT NEW USERS
$username = 'tuanle186';
$password = 'ronaldo';
$user_level = 5;
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password, level)
VALUES ('$username', '$hash', $user_level)";

if ($conn->query($sql) === TRUE) {
    echo "New user added successfully <br>";
} else {
    echo "Error adding new user: " . $conn->error;
}
?>
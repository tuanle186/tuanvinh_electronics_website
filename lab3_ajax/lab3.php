<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CVAS Professional Audio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/style.css" >
        <link rel="stylesheet" href="style_lab3.css" >
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
        <script src="../script/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    </head>

    <body>
        <?php include '../component/nav.php'; ?>
        <div id="ajax_container" class="container w-50">
            <div id="3.3.1" class="container pt-2 mt-4">
                <p>Lab 3.3.1: Click the button below to load a text file from server</p>
                <button type="button" onclick="loadTextFile()">Load</button>
            </div>
            <div id="3.3.2" class="container pt-5 pb-2">
                <p>Lab 3.3.2: Click the button below to load products from database in the XML format</p>
                <button type="button" onclick="loadProducts()">Load</button>
            </div>
        </div>
    </body>
</html>
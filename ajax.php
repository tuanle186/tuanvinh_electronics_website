<!DOCTYPE html>
<html>
    <head>
        <title>CVAS Professional Audio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="logo_1.jpg">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="./style/style.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="script/script.js"></script>
    </head>

    <body>
        <?php include './nav_bar/nav.php'; ?>
        <div id="3.3.1" class="container mt-5">
            <p>Lab 3.3.1: Click the button below to load a text file from server</p>
            <button type="button" onclick="loadTextFile()">Load</button>
        </div>
        <div id="3.3.2" class="container mt-5">
            <p>Lab 3.3.2: Click the button below to load products from database in the XML format</p>
            <button type="button" onclick="loadProducts()">Load</button>
        </div>
    </body>
</html>
<?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'home':
                header("Location: home.php");
                break;
            case 'products':
                header("Location: products.php");
                break;
            case 'login':
                header("Location: login.php");
                break;
            case 'logout':
                header("Location: logout.php");
                break;
            default:
                break;
        }
    }
?>

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
        <script src="./script.js"></script>
    </head>

    <body>
        <?php include 'home.php' ?>
    </body>
</html>

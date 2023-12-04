<?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'home':
                header("Location: ./site_home/home.php");
                break;
            case 'products':
                header("Location: ./site_products/products.php");
                break;
            case 'login':
                header("Location: ./site_login/login.php");
                break;
            case 'logout':
                header("Location: ./site_login/logout.php");
                break;
            default:
                break;
        }
    } else {
        header('Location: ./site_home/home.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CVAS Professional Audio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./style/style.css" >
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
        <script src="./script/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    </head>

    <body>
    </body>
</html>

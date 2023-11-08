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
        <script src="./script.js"></script>
    </head>

    <body>
        <?php include './nav_bar/nav.php' ?>

        <div class="container w-25 mt-5">
            <form name="loginForm" action="./login_processing.php" onsubmit="return validateLoginForm()" method="post">
                <div class="mb-3 mt-3">
                    <label for="username" class="form-label" style="font-weight:700">Tên đăng nhập:</label>
                    <input type="text" class="form-control" id="username" placeholder="Nhập vào tên đăng nhập" name="username">
                </div>
                <div class="mb-3 mt-3">
                    <label for="pwd" class="form-label" style="font-weight:700">Mật khẩu:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Nhập vào mật khẩu" name="pswd">
                </div>
                <button type="submit" class="btn btn-warning">Đăng nhập</button>
            </form>

            <div class="container-fluid mt-2">
                <?php
                    if (isset($_GET['login_failed'])) {
                        echo "Sai tên đăng nhập hoặc mật khẩu";
                    }
                    if (isset($_GET['username_not_found'])) {
                        echo "Không tìm thấy tên đăng nhập";
                    }
                ?>
            </div>
        </div>
    </body>
</html>


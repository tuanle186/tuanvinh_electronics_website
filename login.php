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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style/login.css">
        <link rel="stylesheet" href="style/style.css">
        <script src="./script.js"></script>
    </head>
    
    <body>
        <div class="container-fluid" id="body_container">
            <div class="container" id="form_container">
                <form name="loginForm" action="./login_processing.php" onsubmit="return validateLoginForm()" method="post">
                    <div class="mb-3 mt-3">
                        <label for="username" class="form-label" style="font-weight:700">Tên đăng nhập:</label>
                        <input type="text" 
                            class="form-control" 
                            id="username" 
                            placeholder="Nhập vào tên đăng nhập" 
                            name="username" 
                            value="<?php echo isset($_SESSION["username"]) ? $_SESSION["username"] : "" ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="pwd" class="form-label" style="font-weight:700">Mật khẩu:</label>
                        <input type="password" 
                            class="form-control" 
                            id="pwd" 
                            placeholder="Nhập vào mật khẩu" 
                            name="pswd">
                    </div>
                    <button type="submit" class="btn btn-warning">Đăng nhập</button>
                    <div id="login_failed">
                        <?php
                        if (isset($_GET['wrong_pwd'])) {
                            echo "Sai mật khẩu, vui lòng thử lại.";
                        }
                        if (isset($_GET['username_not_found'])) {
                            echo "Không tìm thấy tên đăng nhập";
                        }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>


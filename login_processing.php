<?php
    include './database/dbConn.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username_input = test_input($_POST['username']);
        $password_input = test_input($_POST['pswd']);
        $sql = 'SELECT * FROM users WHERE username="' . $username_input . '"';
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $rows = $result->fetch_assoc();
            if (password_verify($password_input, $rows['password'])) {
                setcookie("user", $username_input, time() + (86400 * 30), "/");
                session_start();
                $_SESSION["username"] = $username_input;
                $_SESSION["password"] = $rows['password'];
                $_SESSION["level"] = $rows['level'];
                header("Location: index.php");

            } else {
                header("Location: http://localhost/login.php?login_failed=1");
            }
        } else {
            header("Location: http://localhost/login.php?username_not_found=1");
        }
    }   
    mysqli_close($conn);

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

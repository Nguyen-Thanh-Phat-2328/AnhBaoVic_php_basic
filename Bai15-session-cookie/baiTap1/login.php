<?php
    session_start();

    $errEmail = $errPass = '';
    $isErr = false;

    if(isset($_POST['loginClick'])) {

        if(empty($_POST['email'])) {
            $errEmail = 'Vui lòng nhập email';
            $isErr = true;
        }

        if(empty($_POST['pass'])) {
            $errPass = 'Vui lòng nhập pass';
            $isErr = true;
        }

        if(!$isErr) {
            if(isset($_SESSION['email']) && isset($_SESSION['pass'])) {
                if($_SESSION['email'] == $_POST['email'] && $_SESSION['pass'] == $_POST['pass']) {
                    echo 'Login thành công ';
                } else {
                    echo 'Sai email hoặc mật khẩu';
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="email" />
        <p><?php echo $errEmail ?></p>
        <input type="text" name="pass" />
        <p><?php echo $errPass ?></p>
        <input type="submit" name="loginClick" />
    </form>
</body>
</html>
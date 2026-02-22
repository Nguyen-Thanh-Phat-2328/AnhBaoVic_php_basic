<?php
    session_start();
    $messageEmail = $messagePass = $email = $pass = '';
    $err = false;
    
    if(isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
    }

    if(isset($_SESSION['pass'])) {
        $pass = $_SESSION['pass'];
    }

    if(empty($_POST['email'])) {
        $messageEmail = 'Vui lòng nhập email';
        $err = true;
    }

    if(empty($_POST['pass'])) {
        $messagePass = 'Vui lòng nhập pass';
        $err = true;
    }

    if(!$err) {
        if($_POST['email'] === $email && $_POST['pass'] === $pass){
            echo 'Đăng nhập thành công';
        } else {
            echo 'Tài khoản hoặc mật khẩu không đúng';
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
        <input type="text" name="email">
        <p><?php echo $messageEmail ?></p>
        <input type="text" name="pass">
        <p><?php echo $messagePass ?></p>
        <input type="submit" name="submit">
    </form>
</body>
</html>
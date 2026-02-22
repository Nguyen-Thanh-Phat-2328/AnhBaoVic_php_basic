<?php
    session_start();

    $messageEmail = $messagePass = '';
    $err = false;

    if(isset($_POST['submit'])) {
        if(empty($_POST['email'])) {
            $messageEmail = 'Vui lòng nhập email';
            $err = true;
        }

        if(empty($_POST['pass'])) {
            $messagePass = 'Vui lòng nhập pass';
            $err = true;
        }

        if(!$err) {
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['pass'] = $_POST['pass'];
            echo 'Đăng ký thành công';
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
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
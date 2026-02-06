<?php 
    session_start();
    if(isset($_POST['save-session'])) {
        //lưu session
        $_SESSION['name'] = $_POST['userName'];
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
    <h1>
        <?php
            if(isset($_SESSION['name'])) {
                echo 'Tên đăng nhập là: ' . $_SESSION['name'];
            }

            // unset($_SESSION['name']); // xóa biến name trên session
            // session_destroy(); // xóa hết session
        ?>
    </h1>
    <form action="" method="POST">
        <input type="text" name="userName" value="" /> <br/>
        <input type="submit" name="save-session" value="Lưu Session" />
    </form>
    
</body>
</html>
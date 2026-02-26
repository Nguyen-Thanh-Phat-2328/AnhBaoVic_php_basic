<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();

        $messageEmail = $messagePass = $messageCity = '';
        $err = false;

        if(isset($_POST['submit'])) {
            if(empty($_POST['email'])) {
                $messageEmail = 'Vui long nhap email';
                $err = true;
            }

            if(empty($_POST['pass'])) {
                $messagePass = 'Vui long nhap pass';
                $err = true;
            }

            if(empty($_POST['city'])) {
                $messageCity = 'Vui long nhap city';
                $err = true;
            }

            if(!$err) {
                $demo = [
                    'email' => $_POST['email'],
                    'pass' => $_POST['pass'],
                    'city' => $_POST['city']
                ];

                $_SESSION['form'][] = $demo;
            }
        }
    ?>
    <form action="" method="post">
        <input type="text" name="email">
        <p><?php echo $messageEmail ?></p>
        <input type="text" name="pass">
        <p><?php echo $messagePass ?></p>
        <input type="text" name="city">
        <p><?php echo $messageCity ?></p>
        <button name="submit">Submit</button>
    </form>
</body>
</html>
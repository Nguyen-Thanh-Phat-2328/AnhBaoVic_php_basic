<?php
    session_start();

    $messageCity = $messageEmail = $messagePass = '';
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

        if(empty($_POST['city'])) {
            $messageCity = 'Vui lòng nhập city';
            $err = true;
        }

        if(!$err) {
            $user = [
                'email' => $_POST['email'],
                'pass' => $_POST['pass'],
                'city' => $_POST['city']
            ];
            $_SESSION['users'][] = $user;
            // print_r($_SESSION['users']);
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
        <p><?php echo $messageEmail ?></p>
        <input type="text" name="pass" />
        <p><?php echo $messagePass ?></p>
        <input type="text" name="city" />
        <p><?php echo $messageCity ?></p>
        <input type="submit" name="submit">
    </form>

    <table>
        <tr>
            <th>Email</th>
            <th>Pass</th>
            <th>City</th>
        </tr>
        <?php
            if(isset($_SESSION['users'])) {
                $users = $_SESSION['users'];
            } else {
                $users = [];
            }

            foreach($users as $key => $value) {
                ?>
                    <tr>
                        <td><?php echo $value['email'] ?></td>
                        <td><?php echo $value['pass'] ?></td>
                        <td><?php echo $value['city'] ?></td>
                    </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Email</th>
            <th>Pass</th>
            <th>City</th>
        </tr>
        <?php
            session_start();

            if(isset($_SESSION['form'])) {
                $users = $_SESSION['form'];

                foreach($users as $key => $value) {
                    ?>
                        <tr>
                            <td><?php echo $value['email'] ?></td>
                            <td><?php echo $value['pass'] ?></td>
                            <td><?php echo $value['city'] ?></td>
                        </tr>
                    <?php
                }
            }
        ?>
    </table>
</body>
</html>
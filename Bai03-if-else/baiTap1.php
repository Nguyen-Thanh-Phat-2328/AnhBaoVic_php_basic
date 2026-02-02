<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $message = '';
        if(isset($_POST['submit'])) {
            if(!is_numeric($_POST['number'])) {
                $message = 'vui long nhập số';
            } else {
                $number = $_POST['number'];
                if($number % 7 == 0) {
                    $message = 'Chia hết cho 7';
                } else {
                    $message = 'Không chia hết cho 7';
                }
            }
        }
    ?>

    <form action="" method="post">
        <input type="text" name="number" />
        <p><?php echo $message ?></p>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
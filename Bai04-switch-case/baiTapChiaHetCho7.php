<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $err = $ketQua = '';
        $isErr = false;
        if(isset($_POST['submit'])){
            if($_POST['number'] === ''){
                $err = 'Vui lòng nhập';
                $isErr = true;
            }

            if(!$isErr) {
                $number = (float)$_POST['number'];

                switch($number % 7) {
                    case 0:
                        $ketQua = 'Chia hết cho 7';
                        break;
                    default:
                        $ketQua = 'Không chia hết cho 7';
                        break;
                }
            }
        }
    ?>
    <form action="" method="post">
        <input type="text" name="number" placeholder="nhập số cần kiểm tra">
        <p><?php echo $err ?></p>
        <button type="submit" name="submit">Submit</button>
    </form>
    <p><?php echo $ketQua ?></p>
</body>
</html>
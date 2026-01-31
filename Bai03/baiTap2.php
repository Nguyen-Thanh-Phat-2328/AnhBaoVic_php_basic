<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $errDiemToan = $errDiemLy = $errDiemHoa = $ketQua = '';
        $err = false;
        $diemToan = $_POST['diemToan'];
        $diemLy = $_POST['diemLy'];
        $diemHoa = $_POST['diemHoa'];
        if(isset($_POST['submit'])) {
            if(!is_numeric($diemToan)) {
                $errDiemToan = 'vui lòng nhập điểm toán';
                $err = true;
            } else if($diemToan < 0 || $diemToan > 10) {
                $errDiemToan = 'vui lòng nhập điểm toán trong đoạn từ 0 -> 10';
                $err = true;
            }

            if(!is_numeric($diemLy)) {
                $errDiemLy = 'vui lòng nhập điểm lý';
                $err = true;
            } else if($diemLy < 0 || $diemLy > 10) {
                $errDiemLy = 'vui lòng nhập điểm lý trong đoạn từ 0 -> 10';
                $err = true;
            }

            if(!is_numeric($diemHoa)) {
                $errDiemHoa = 'vui lòng nhập điểm hóa';
                $err = true;
            } else if($diemHoa < 0 || $diemHoa > 10) {
                $errDiemHoa = 'vui lòng nhập điểm hóa trong đoạn từ 0 -> 10';
                $err = true;
            }

            if(!$err) {
                if($diemToan == 1 || $diemLy == 1 || $diemHoa == 1 || $diemToan + $diemLy + $diemHoa < 15) {
                    $ketQua = 'Rớt';
                } else {
                    $ketQua = 'Đậu';
                }
                
            }
        }
    ?>

    <form action="" method="post">
        <input type="number" name="diemToan" placeholder="nhập điểm toán"/>
        <p><?php echo $errDiemToan ?></p>
        <input type="number" name="diemLy" placeholder="nhập điểm lý"/>
        <p><?php echo $errDiemLy ?></p>
        <input type="number" name="diemHoa" placeholder="nhập điểm hóa"/>
        <p><?php echo $errDiemHoa ?></p>
        <button type="submit" name="submit">Submit</button>
    </form>
    <p><?php echo $ketQua ?></p>
</body>
</html>
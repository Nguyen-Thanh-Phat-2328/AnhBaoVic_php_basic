<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $errDiemToan = $errDiemLy = $errDiemHoa = $errDiemAnh = $errDiemVan = $errDiemSu = $ketQua = '';
        $diemToan = (float)$_POST['diemToan'];
        $diemLy = (float)$_POST['diemLy'];
        $diemHoa = (float)$_POST['diemHoa'];
        $diemAnh = (float)$_POST['diemAnh'];
        $diemVan = (float)$_POST['diemVan'];
        $diemSu = (float)$_POST['diemSu'];
        $err = false;

        if(isset($_POST['submit'])) {
            if(empty($diemToan)) {
                $errDiemToan = 'Vui lòng nhập điểm toán';
                $err = true;
            } else if($diemToan < 0 || $diemToan > 10) {
                $errDiemToan = 'Điểm toán phải nằm trong đoạn từ 0 đến 10';
                $err = true;
            }

            if(empty($diemLy)) {
                $errDiemLy = 'Vui lòng nhập điểm Lý';
                $err = true;
            } else if($diemLy < 0 || $diemLy > 10) {
                $errDiemLy = 'Điểm Lý phải nằm trong đoạn từ 0 đến 10';
                $err = true;
            }

            if(empty($diemHoa)) {
                $errDiemHoa = 'Vui lòng nhập điểm Hóa';
                $err = true;
            } else if($diemHoa < 0 || $diemHoa > 10) {
                $errDiemHoa = 'Điểm Hóa phải nằm trong đoạn từ 0 đến 10';
                $err = true;
            }

            if(empty($diemAnh)) {
                $errDiemAnh = 'Vui lòng nhập điểm Anh';
                $err = true;
            } else if($diemAnh < 0 || $diemAnh > 10) {
                $errDiemAnh = 'Điểm Anh phải nằm trong đoạn từ 0 đến 10';
                $err = true;
            }

            if(empty($diemVan)) {
                $errDiemVan = 'Vui lòng nhập điểm Văn';
                $err = true;
            } else if($diemVan < 0 || $diemVan > 10) {
                $errDiemVan = 'Điểm Văn phải nằm trong đoạn từ 0 đến 10';
                $err = true;
            }

            if(empty($diemSu)) {
                $errDiemSu = 'Vui lòng nhập điểm Sử';
                $err = true;
            } else if($diemSu < 0 || $diemSu > 10) {
                $errDiemSu = 'Điểm Sử phải nằm trong đoạn từ 0 đến 10';
                $err = true;
            }

            if(!$err) {
                $dtb = ($diemToan + $diemLy + $diemHoa + $diemAnh + $diemVan + $diemSu) / 6;
                if($diemToan < 4 || $diemLy < 4 || $diemHoa < 4 || $diemAnh < 4 || $diemVan < 4 || $diemSu < 4 || $dtb < 5) {
                    $ketQua = 'Yếu';
                } else if($dtb >= 5 && $dtb < 6.5) {
                    $ketQua = 'Trung bình';
                } else if($dtb >= 6.5 && $dtb < 8) {
                    $ketQua = 'Khá';
                } else {
                    $ketQua = 'Giỏi';
                }
            }
        }
    ?>
    <form action="" method="post">
         <input type="text" name="diemToan" placeholder="nhập điểm toán">
         <p><?php echo $errDiemToan ?></p>
         <input type="text" name="diemLy" placeholder="nhập điểm lý">
         <p><?php echo $errDiemLy ?></p>
         <input type="text" name="diemHoa" placeholder="nhập điểm hóa">
         <p><?php echo $errDiemHoa ?></p>
         <input type="text" name="diemAnh" placeholder="nhập điểm anh">
         <p><?php echo $errDiemAnh ?></p>
         <input type="text" name="diemVan" placeholder="nhập điểm văn">
         <p><?php echo $errDiemVan ?></p>
         <input type="text" name="diemSu" placeholder="nhập điểm sử">
         <p><?php echo $errDiemSu ?></p>
         <button type="text" name="submit">Submit</button>
    </form>
    <p><?php echo $ketQua ?></p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])) {
            if(!empty($_FILES['avatar']['name'])) {
                if($_FILES['avatar']['error'] > 0) {
                    echo 'File upload bị lỗi';
                } else {
                    if($_FILES['avatar']['size'] >= 1024 * 1024) {
                        echo 'file vượt quá kích thước 1mb';
                    } else {
                        $listNameImage = ['jpg', 'JPG', 'jpeg', 'JPEG', 'png', 'PNG'];
                        $explodeFileName = explode('.', $_FILES['avatar']['name']);
                        $exFile = $explodeFileName[count($explodeFileName) - 1];

                        if(!in_array($exFile, $listNameImage)) {
                            echo 'không phải file ảnh';
                        } else {
                            move_uploaded_file($_FILES['avatar']['tmp_name'], './upload/' . $_FILES['avatar']['name']);
                            echo 'upload thành công';
                        }
                    }
                }
            } else {
                echo 'Chưa chọn file';
            }
        }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="avatar">
        <button name="submit">button</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<pre>";
        // var_dump($_FILES);

        if(isset($_POST['uploadclick'])) {
            // echo 'đã click';

            if(!empty($_FILES['avatar']['name'])) {
                if($_FILES['avatar']['error'] > 0) {
                    echo 'File upload bị lỗi';
                } else {
                    
                    // echo $_FILES['avatar']['size'];
                    if($_FILES['avatar']['size'] >= 1024 * 1024) {
                        echo 'Kích thước vượt quá 1mb';
                    } else {
                        $listNameImg = ['png', 'jpg', 'jpeg', 'PNG', 'JPG', 'JPEG'];
                        $explodeFileName = explode(".", $_FILES['avatar']['name']);
                        $exFile = $explodeFileName[count($explodeFileName) - 1];
                        // print_r($explodeFileName);

                        if(!in_array($exFile, $listNameImg)) {
                            echo 'Không phải file ảnh';
                        } else {
                            move_uploaded_file($_FILES['avatar']['tmp_name'], './FileUploadBai14/'.$_FILES['avatar']['name']);
                            echo 'File Uploaded';
                        }
                    }
                    // var_dump($_FILES['avatar']);
                }
            } else {
                echo 'Bạn chưa chọn file upload';
            }
        }
        
        
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="avatar" />
        <input type="submit" name="uploadclick" value="Upload" />
    </form>
</body>
</html>
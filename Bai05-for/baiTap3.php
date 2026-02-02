<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $name = 'Nguyễn Thành Phát';
            // echo $name;
            for($i = 0; $i < mb_strlen($name, 'UTF-8'); $i++){
                echo mb_substr($name, $i, 1, 'UTF-8') . '<br>';
            }
        ?>
    </body>
    </html>
</body>
</html>
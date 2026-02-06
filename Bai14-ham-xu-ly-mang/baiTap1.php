<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40");

        
        echo '1. sắp xếp tăng dần theo value';
        echo '<br>';
        asort($array);
        foreach($array as $key => $value) {
            echo 'Tuổi của ' . $key . ' là: ' . $value;
            echo '<br>';
        }

        echo '2. sắp xếp tăng dần theo key';
        echo '<br>';

        ksort($array);
        foreach($array as $key => $value) {
            echo 'Tuổi của ' . $key . ' là: ' . $value;
            echo '<br>';
        }

        echo '3. sắp xếp giảm dần theo value';
        echo '<br>';

        arsort($array);
        foreach($array as $key => $value) {
            echo 'Tuổi của ' . $key . ' là: ' . $value;
            echo '<br>';
        }

        echo '4. sắp xếp giảm dần theo key';
        echo '<br>';

        krsort($array);
        foreach($array as $key => $value) {
            echo 'Tuổi của ' . $key . ' là: ' . $value;
            echo '<br>';
        }
    ?>
</body>
</html>
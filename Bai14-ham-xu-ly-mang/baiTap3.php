<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $string = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
        $arrString = explode(", ", $string);
        // echo '<pre>';
        // print_r($arrString);
        // echo '</pre>'

        echo 'Giá trị trung bình: ';
        // $tbc = 0;
        // $dem = 0;
        // foreach($arrString as $key => $value){
        //     $tbc = $tbc + $value;
        //     $dem ++;
        // }

        // $tbc = $tbc / $dem;

        $tbc = array_sum($arrString) / count($arrString);

        echo $tbc;

        asort($arrString);
        echo '<br>';
        echo '5 số nhỏ nhất: ';
        $arr1 = array_slice($arrString, 0, 5);
        foreach($arr1 as $key => $value) {
            echo $value . ' ';
        }

        echo '<br>';
        echo '5 số lớn nhất: ';
        $arr1 = array_slice($arrString, count($arrString) - 5, 5);
        foreach($arr1 as $key => $value) {
            echo $value . ' ';
        }

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = [1,23,5,100,25,7,99];
        $max = $min = $array[0];
        for($i = 0; $i < count($array); $i++) {
            echo $array[$i] . ' ';

            if($array[$i] >= $max) {
                $max = $array[$i];
            }

            if($array[$i] <= $min) {
                $min = $array[$i];
            }
        }

        echo ': max = ' . $max . ' min = ' . $min;
    ?>
</body>
</html>
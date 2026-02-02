<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function tim_max_trong_3_so($a, $b, $c) {
            echo $a . ', ' . $b . ', ' . $c . '<br>';
            echo 'max = ' . tim_max_trong_2_so(tim_max_trong_2_so($a, $b), $c);
        }

        function tim_max_trong_2_so($a, $b){
            $max = 0;
            if($a >= $b)
                $max = $a;
            else
                $max = $b;
            return $max;
        }

        tim_max_trong_3_so(10, 1, 12);
    ?>
</body>
</html>
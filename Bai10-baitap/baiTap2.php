<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = array();
        for($i = 1; $i <= 100; $i++){
            $array[$i - 1] = $i;
        }

        function tim_vi_tri_chia_het_cho_3($array) {
            foreach($array as $key => $value) {
                if($value % 3 == 0) {
                    echo $key . ' => ' . $value . '<br>';
                }
            }
        }

        tim_vi_tri_chia_het_cho_3($array);
    ?>
</body>
</html>
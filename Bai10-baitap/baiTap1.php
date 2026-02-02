<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = array(321,312,3,4,5,45,56,5,7,6,787,8,7,2);
        $number = 67;
        $is = false;

        function kiem_tra_so_co_trong_mang($array, $number) {  
            global $is;
            foreach($array as $value) {
                if($value == $number){
                    $is = true;
                }
            }
            return $is;
        }

        if(kiem_tra_so_co_trong_mang($array, $number)){
            echo 'số ' . $number . ' có trong mảng';
        } else {
            echo 'số ' . $number . ' không có trong mảng';
        }
    ?>
</body>
</html>
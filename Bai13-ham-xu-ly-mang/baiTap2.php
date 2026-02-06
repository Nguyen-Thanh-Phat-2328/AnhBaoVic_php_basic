<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
        echo 'Mảng ban đầu';
        echo '<br>';
        print_r($array);
        echo '<br>';

        echo 'Các giá trị ở dạng chữ thường';
        echo '<br>';
        foreach($array as $key => &$value) {
            $value = strtolower($value);
        }
        print_r($array);
        echo '<br>';

        echo 'Các giá trị ở dạng chữ hoa';
        echo '<br>';
        foreach($array as $key => &$value) {
            $value = strtoupper($value);
        }
        print_r($array);
        echo '<br>';
    ?>
</body>
</html>
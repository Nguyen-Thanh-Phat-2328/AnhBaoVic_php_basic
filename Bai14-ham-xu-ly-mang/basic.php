<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = array(
            'chu_THUONG' => 'Hello'
        );

        $array = array_change_key_case($array, 0); # có thể dùng CASE_UPPER thay cho 1 và CASE_LOWER thay cho 0

        var_dump($array);

        echo '<br>';
        $array_keys = array('a', 'b', 'c');
        $array_values = array('chữ a', 'chữ b', 'chữ c');
        print_r(array_combine($array_keys, $array_values)); #trộn 2 mảng điều kiện 2 mảng phải bằng nhau

        echo '<br>';
        #gộp mảng;
        $arr1 = array(
            "php" => "laravel",
            "css", "html"
        );
        $arr2 = array(
            "python",
            "php" => "zend",
            "js" => "nodeJs"
        );

        $result = array_merge($arr1, $arr2);
        echo '<pre>';
        print_r($result);
        echo '</pre>';

        #tách mảng
        
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $string =  "chào các bạn mình nói \"Say Hi\"";
        echo addcslashes('Chào các bạn', 'a..zA..Z'); #thêm \ vào trước các chữ cái từ a -> z và cả từ A -> Z
        echo '<br>';
        $x = explode(' ', $string); # chuyển một chuỗi thành một mảng
        var_dump($x);

        echo '<br>';
        $y = implode(' ', array( # chuyển một mảng thành một chuỗi
            'chào',
            'các',
            'bạn'
        ));

        echo $y;


        echo '<br>';
        echo ord('abc'); #trả về mã ASCII của ký tự đầu tiên của chuỗi truyền vào

        echo '<br>';
        echo strlen($string); #đếm số ký tự của chuỗi;

        echo str_word_count($string);

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    // $data = 123;

    // // echo $data;
    // echo('Chào các bạn '.$data);

    // $data2 = '98';
    // // $data2 = (int)$data2;
    // echo $data2;
    // var_dump($data2);
    echo "<pre>";
    $arr = array('Chào các bạn', 123);
    
    var_dump($arr);

    $arr2 = array(
        0 => 'Nguyễn Thành Phát',
        2 => 'hihi'
    );
    var_dump($arr2);

    $arr3 = array();
    $arr3[] = "blo";
    $arr3[] = 123;
    $arr3[3] = "clo";

    var_dump($arr3);

    echo $arr3[3];

    $arr4 = array(
        'sinhvien1' =>  "Phát",
        'sinhvien2' => "Long",
    );

    var_dump($arr4);

    $arr4['sinhvien1'] = "Thành Phát";

    echo $arr4['sinhvien1'];

?>
    
</body>
</html>
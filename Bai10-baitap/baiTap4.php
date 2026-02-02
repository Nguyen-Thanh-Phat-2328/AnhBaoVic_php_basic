<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $number = 40;

        function kiem_tra_chia_het_40($number){
            for($i = 1; $i <= 1000; $i++) {
                if($i % $number == 0)
                    echo $i . '<br>';
            }
        }

        kiem_tra_chia_het_40($number);
    ?>
</body>
</html>
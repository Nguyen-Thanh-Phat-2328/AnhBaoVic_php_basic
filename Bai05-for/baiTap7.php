<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $students = array(
            array(
                'name'  => 'Nguyễn Văn Cường 1',
                'email' => 'thehalfheart1@gmail.com',
                'age'   => '29'
            ),
            array(
                'name'  => 'Nguyễn Văn Cường 2',
                'email' => 'thehalfheart2@gmail.com',
                'age'   => '29'
            ),
            array(
                'name'  => 'Nguyễn Văn Cường 3',
                'email' => 'thehalfheart3@gmail.com',
                'age'   => '29'
            ),
            array(
                'name'  => 'Nguyễn Văn Cường 4',
                'email' => 'thehalfheart4@gmail.com',
                'age'   => '29'
            ),
            array(
                'name'  => 'Nguyễn Văn Cường 5',
                'email' => 'thehalfheart5@gmail.com',
                'age'   => '29'
            ),
            array(
                'name'  => 'Nguyễn Văn Cường 6',
                'email' => 'thehalfheart6@gmail.com',
                'age'   => '29'
            )
        );
    ?>

    <style>
        table, tr, td {
            border: 1px solid #000;
        }

        td{
            padding: 5px;
        }
    </style>

    <table>
        <?php
            for($i = 0; $i < count($students); $i++){
                ?>
                    <tr>
                        <td><?php echo $students[$i]['name'] ?></td>
                        <td><?php echo $students[$i]['email'] ?></td>
                        <td><?php echo $students[$i]['age'] ?></td>
                    </tr>
                <?php
            }
        ?>


        <!-- cách 2 -->
        <?php
            for($i = 0; $i < count($students); $i++){
                echo '<tr>'.
                    '<td>'.$students[$i]['name'].'</td>'.
                    '<td>'.$students[$i]['email'].'</td>'.
                    '<td>'.$students[$i]['age'].'</td>'
                .'</tr>';
            }
        ?>
    </table>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadatak_3</title>
</head>
<body>
    <?php 
    $a = mt_rand(1, 10);
    $b = mt_rand(1, 10);
    $c = mt_rand(1, 10);
    $kvadrat_a = pow($a, 2);
    $kvadrat_b = pow($b, 2);
    $kvadrat_c = pow($c, 2);

    ?>
    <table border="1">
    <tr>
    <td><?=$a ?></td>
    <td><?=$kvadrat_a ?></td>
    
    </tr>
    <tr>
    <td><?=$b ?></td>
    <td><?=$kvadrat_b ?></td>

    </tr>
    <tr>
    <td><?=$c ?></td>
    <td><?=$kvadrat_c ?></td>

    </tr>
    </table>
</body>
</html>
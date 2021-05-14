<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadatak1</title>
    <style>
    .zelena {
        color: green;
    }
    .crvena {
        color: red;
    }
    </style>
</head>
<body>
    <?php 
    $a = mt_rand(1, 100);
    $b = mt_rand(1, 100);
    if($a > $b) {
        echo "<h2 class='zelena' style = 'color: green;'>$a</h2>";
        echo "<h2 class='crvena' style = 'color: red;'>$b</h2>";
    }else {
        echo "<h2 class='crvena' style = 'color: red;'>$a</h2>";
        echo "<h2 class='zelena' style = 'color: green;'>$b</h2>";
    }
 
    ?>
</body>
</html>
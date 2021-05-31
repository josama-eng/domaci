<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proizvodi</title>
    <link rel="stylesheet" href="proizvod.css">
</head>
<body>

    <?php 
    require_once "./proizvod.php";
    echo make_div("<img src='./img/iphone.png'>","iPhone 11 64GB White",83399,20,$cena_sa_popustom);
    echo make_div("<img src='./img/laptop.png'>","MacBook Pro 13 Touch Bar ",297999,10,$cena_sa_popustom);
    echo make_div("<img src='./img/slusalice.png'>","AirPods Max Space Gray ",97099,"","");
    ?>
    
</body>
</html>
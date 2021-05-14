<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadatak2</title>
</head>
<body>
<?php
    $a = mt_rand(1, 10);
    $b = mt_rand(1, 10);
    $c = mt_rand(1, 10);
    if ($a <= $b){
        if ($c <= $a){
            echo $c,"<br>",$a,"<br>",$b;
        } elseif ($b <= $c){
            echo $a,"<br>",$b,"<br>",$c;
        } else {
            echo $a,"<br>",$c,"<br>",$b;
        }
    } else {
        if ($c <= $b){
            echo $c,"<br>",$b,"<br>",$a;
        } elseif ($c <= $a){
            echo $b,"<br>",$c,"<br>",$a;
        } else {
            echo $b,"<br>",$a,"<br>",$c;
        }
    }
?>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    $num_1 = $_GET["num_1"];
    $num_2 = $_GET["num_2"];
    $num_3 = $_GET["num_3"];
    $num_4 = $_GET["num_4"];
    $z_1 = 0;
    $z_2 = 0;
    if($num_2>$num_1&&$num_4>$num_3){
        for($i=$num_1;$i<=$num_2;$i++){
            if($i%4==0){
            $z_1+=$i;
            }
        }
        for($i=$num_3;$i<=$num_4;$i++){
            if($i%3==0){
                $z_2+=$i;
            }
        }
    }else{
        die('Greska');
    }
    if($z_1>$z_2){
        echo "<p>Veci je prvi zbir i on iznosi $z_1</p>";
    }
    if($z_1<$z_2){
        echo "<p>Veci je drugi zbir i on iznosi $z_2</p>";
    }
    ?>
</body>
</html>






        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- zadatak1 -->
    <?php 
    echo "<table border='1'>";
    $counter = 0;
    $counter_2 = 0;
    for($i=0;$i <= 2; $i++){
        $counter+=2;
        $counter_2 = 0;
        echo "<tr>";
        for($j=0;$j<=3;$j++){
            $counter_2+=3;
            echo "<td>";
            echo "$counter - $counter_2";
            echo "</td>";
        }
        echo "</tr>";
    }
    
    ?>
        <style>
    td{
       width: 40px;
       height: 20px; 

    }
    </style>

    <br>
<!-- zadatak2 -->

<?php
    $broj = mt_rand(1, 64);
    $polje = 1;
    echo "<table cellspacing='0' cellpadding='0'><tbody>";
    for($i = 0; $i < 8; $i++){
        $red = "<tr>";
        for($o = 0; $o < 8; $o++){
            if($polje == $broj){
                $red .= "<td style='background-color: black; width: 30px; height: 30px; border: 1px solid #000;'></td>";
            } else {
                $red .= "<td style='width: 30px; height: 30px; border: 1px solid #000;'></td>";
            }
            $polje++;
        }
        $red .= "</tr>";
        echo $red;
    }
?>

</body>
</html>
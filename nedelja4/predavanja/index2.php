<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11.05.2021</title>
</head>
<body>
<!-- zadatak1 -->
    <?php 
     $osoba_1 = mt_rand(1950, 2000);
     $osoba_2 = mt_rand(2001, 2020);
     $brojGodina_1 = 2021 - $osoba_1;
     $brojGodina_2 = 2021 - $osoba_2;
     $decenija_1 = $brojGodina_1 / 10;
     $decenija_2 = $brojGodina_2 / 10;
     $resenje_1 = ceil($decenija_1);
     $resenje_2 = ceil($decenija_2);
    
     echo "<br/>";
     echo $resenje_1; 
     echo "<br/>";
     echo $resenje_2; 
    ?>
    <!-- zadatak2 -->
    <br>
    <?php 
    $a = 15;
    $b = 6;
    $prvo = 2 * $a;
    $drugo = 2 * $b;
    $obim = $prvo + $drugo;
    $kvadrat_a = pow($a, 2);
    $kvadrat_b = pow($b, 2);
   
    $povrsina = $a * $b;
    echo "<br/>";
   
    echo "<br/>";
    $d_sabiranje = $kvadrat_a + $kvadrat_b;
    $d_koren = sqrt($d_sabiranje);
    $dijagonala_resenje = round($d_koren);
    // echo $dijagonala;
    echo "Obim je $obim cm, a dijagonala je $dijagonala_resenje cm."
    ?>
    
</body>
</html>
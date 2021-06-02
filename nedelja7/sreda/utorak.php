<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napisati fju koja vraca true ako neki dati niz ne sadrzi nule, a u suprotnom vraca false.</p>
    <?php 
    $arr = [5,2,78,45,0,4,6,89];
    function zero($arr) {
        $a = true;
       for($i=0;$i<count($arr);$i++){
           if($arr[$i] == 0) {
               $a =  false;
           }
       }
       var_dump($a);
    }
    echo zero($arr);
    ?>
    <br>
    <p>Napisati fju koja za dati niz koji predstavlja kolika je uspesnost uradjenih domacih po danima ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'>28, 'petak=>28] pronalazi:
    Koji dan je najuspesniji
    Kolika je prosecna uspesnost
    Razliku izmedju najbolje i najgore uspesnosti
    </p>
    <?php 
    $assoc = ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'=>28, 'petak'=>26 ];
    function home_work($assoc){
        $max = max($assoc);
        $min = min($assoc);
        $ind = array_search($max,$assoc);
        echo "Najuspesniji je $ind";
        echo "<br>";
        foreach($assoc as $value) {
            $zbir = array_sum($assoc);
            $prosek = number_format($zbir / count($assoc),2);
        }
        echo "Prosek je  $prosek";
        echo "<br>";
        $razlika = $max - $min;
        echo "Razlika izmedju najbolje i najgore uspesnosti je $razlika";
    }
    echo home_work($assoc);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- zadatak 1  -->
    <p>Od niza zadatih reči, napraviti niz čiji će svaki element predstavljati span. Svaki span će imati klasu "crveni", "zeleni" u zavisnosti od toga da li je reč kraća ili duža od 5 slova. Prikazati dobijeni niz.</p>

    <?php 
    $arr = ["telefon", "maska", "tigar", "automobil", "bolnica", "more", "torta", "aligator","nos","mis"];
    $arr_2 = [];
    foreach($arr as $el) {
        if(strlen($el) > 5) {
            array_push($arr_2,"<span class='crveni'>$el</span>") ;
        }else{
            array_push($arr_2,"<span class='zeleni'>$el</span>") ;
        }
    }
    echo join(",", $arr_2) ;
    ?>
    <style>
    .crveni {
        color: red;
    }
    .zeleni {
        color: green;
    }
    </style>
    <br>
    <!-- zadatak 2 -->
    <p>Napraviti niz od svih brojeva koji su veći od aritmetičke sredine niza (prosečne vrednosti). </p>
    <?php 
    $array = [23,18,32,7,55,78,12,4,85,74,51,28];
    $array_2 = [];
    $zbir = array_sum($array);
    $aritmeticka_sredina = floor($zbir / count($array));
    foreach ($array as $el) {
        if($el > $aritmeticka_sredina) {
            array_push($array_2,$el);
        }
    }
    echo join(",", $array_2);
    ?>
    <br>
    <!-- zadatak 3 -->
    <p>
    a) Napisati funkciju koja ucitava niz iz forme iz inputa. Sve brojeve u inputu razdvojiti razmakom. Fja vraca ucitani niz
    b) Napisati funkciju koja ispituje i vraca da li neki dati niz X ima bar 3 parna broja.
    c) Napisati funkciju koja ispituje i vraca da li neki dati niz ima sve brojeve manje od 1000.
    d) Pomocu gornjih funkcija za niz dobijen iz inputa ispitati i prikazati da li taj niz ima sve brojeve manje od 1000 i bar 3 parna. 
</p>

<form action="form.php">
<input type="text" name="inp">
<input type="submit" value="posalji">
</form>
</body>
</html>
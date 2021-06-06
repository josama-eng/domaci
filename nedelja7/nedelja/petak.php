<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Preko map fje dodati svakom clanu "godine_staza" (jedan slucajan broj od 1 do 3, nije niz) Preko usort fje sortirati niz po godinama_staza (*dodatak - neobavezno, ako su godine iste pri uporedjivanju, neka prva bude starija osoba) Preko filter fje napraviti niz od osoba cija je godina_staza najveca. (uputstvo, prvo izracunati max, pa onda filter) </p>

    <?php 
    $x = [ 
        ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
        ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
        ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
        ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
       ];
       $novi_niz = array_map(function($osoba){
         $osoba['gs'] = "";
         for($i=0;$i<4;$i++){
            $osoba['gs'] = mt_rand(5,20);
         }
         return $osoba;
       },$x);
var_dump($novi_niz);
echo "<br>";
echo "<br>";


usort($novi_niz, function($a, $b){
    if($a['gs'] > $b['gs'])
        return -1;
    else    
        return 1;
});
var_dump($novi_niz);
echo "<br>";
echo "<br>";
echo "<br>";
$b = array();
for($i=0; $i < count($novi_niz); $i++){
   $b[$i] = $novi_niz[$i]['gs'];
}
$najveci =  max($b);
$max_radni_staz = array_filter($novi_niz, function($osoba){
    global $najveci;
    if($osoba['gs'] == $najveci){
       return true;
    }else {
        return false;
    }
 });
 var_dump($max_radni_staz);

    ?>
</body>
</html>
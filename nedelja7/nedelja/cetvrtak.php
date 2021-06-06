<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Dodati u gornji niz jos 4 osobe po zelji.
Napisati fju koja prikazuje imena svih programera.
Napisati fju koja prikazuje sve podatke neke date osobe. Pozivajuci tu funkciju prikazati sve osobe cije ime sadrzi slovo s.
</p>
    <?php 
$x = [ 
    ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
    ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
    ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
    ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
   ];
  
   $ime = ['Milos','Ana','Zoran','Milan'];
   $godine = [30,22,35,40];
   $pozicija = ['graficki dizajner','seo','hr','higijenicar'];
   $grad = ['Novi Sad','Jagodina','Pozarevac','Kraljevo'];
    for($i = 0; $i < 4; $i++){
       array_push($x,['ime' => $ime[$i],'godine'=>$godine[$i],'grad'=>$grad[$i],'pozicija'=>$pozicija[$i]]);
    }
//   prikaz svakog clana niza x
    foreach($x as $key=>$value) {
        echo "<p>";
        var_dump($value);
        echo "</p>";
    } 
    function name($x) {
        for($i=0;$i<=count($x);$i++) {
            if($x[$i]['pozicija'] == 'programer'){
                $ime = $x[$i]['ime'];
                echo $ime,"<br>";
            }
        }
        
       }
       name($x);
       $osobe = array_filter($x, function($osoba){
        if(stripos($osoba['ime'], 's') !== false){
        return true;
        };
     });   
     
     function ispisi_podatke_o_osobi($osobe){
        foreach($osobe as $osoba){
           echo "<p>Ime: " . $osoba['ime'] . "<br>Godine: " . $osoba['godine'] . "<br>Grad: " . $osoba['grad'] . "<br>Pozicija: " . $osoba['pozicija'] . "<br></p>";
        };
     }

     ispisi_podatke_o_osobi($osobe);

?>
</body>
</html>
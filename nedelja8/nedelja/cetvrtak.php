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
    class SastojakHrane {
        public $naziv, $mera,$kalorije;
        function __construct($naziv,$mera,$kalorije) {
            $this->naziv = $naziv;
            $this->mera = $mera;
            $this->kalorije = $kalorije;
        }
        function promeni_meru($n_mera){
            $this->mera = $n_mera;
        }
        function prikazi(){
            echo "<p>$this->naziv $this->mera g $this->kalorije kcl</p>";
        }
    }
    // $a = new SastojakHrane('brasno','300','20');
    // $a->promeni_meru('secera',500);
    // echo $a->prikazi();


    ?>
    <br>

    <?php
    require_once "data.php"; 
    class Jelo {

        public $naslov,$opis;
        public $ob;

        function __construct($naslov,$opis,$data) {
            $this->naslov = $naslov;
            $this->opis = $opis;
            $this->ob = [];

            for($i = 0; $i <count($data);$i++){
                $sastojak =  new SastojakHrane($data[$i]['naziv'],$data[$i]['mera'],$data[$i]['kalorije']);
               array_push($this->ob, new SastojakHrane($data[$i]['naziv'],$data[$i]['mera'],$data[$i]['kalorije']));
            }
           
        }

        function show(){
            echo "<div>";
            echo "<p>Naslov: $this->naslov</p>";
            echo "<p>Opis: $this->opis</p>";
            echo "Sastojci: ";
            for($i = 0; $i <count($this->ob);$i++) {
                
                $this->ob[$i]->prikazi();
            }
            echo "</div>";
        }
        function promeniMeru($sastojak,$nova_mera){
            for($i=0;$i<count($this->ob);$i++){
                if($this->ob[$i]->naziv == $sastojak)
                    $this->ob[$i]->promeni_meru($nova_mera);
            }
        }
    }
    $jelo = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
    $jelo->show();
    echo "<br>";
    $jelo->promeniMeru("jaja", "5");
    $jelo->show();

    ?>
</body>
</html>
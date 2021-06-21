<?php 
class Agencija {
    public $conn;
    function __construct($baza){
        $this->conn = new mysqli('localhost', 'jovana', 'jovana', 'agencija');
            // provera
            if ($this->conn->connect_error){
                echo 'JOK connect: '. $thisconn->connect_error;
            } else{
                echo "Konektovan";
            }
    }
    function select($upit){
        $podaci = $this->conn->query($upit);
        if($podaci === false)
            return ['uspesno'=>false, 'poruka'=>$this->conn->error];
        else 
            $niz = $podaci->fetch_all(MYSQLI_ASSOC);
            return ['uspesno'=>true, 'niz'=>$niz];
    }
    function prikazi_destinacije(){
       $dest = $this->select("SELECT drzava,grad,datum_polaska,datum_povratka FROM `destinacije` JOIN `putovanja` ON putovanja.destinacija_id=destinacije.id ");
       if($dest['uspesno'] == true){
        return $dest['niz'];
    }else{
        die("Neuspesan upit: ".$dest['poruka']);
    }
    }
    function prikazi_putnike(){
        $putnici = $this->select("SELECT ime_prezime, drzava, grad, datum_polaska, datum_povratka FROM (`putnici_putovanja` JOIN putnici ON putnici_putovanja.broj_pasosa=putnici.broj_pasosa),(`destinacije` JOIN putovanja ON destinacije.id=putovanja.destinacija_id)");
        if($putnici['uspesno'] == true){
            return $putnici['niz'];
        }else{
            die("Neuspesan upit: ".$putnici['poruka']);
        }
    }

    function otkazi_rezervaciju($broj_pasosa) {
        $otkazi = $this->select("DELETE FROM `putnici_putovanja` WHERE broj_pasosa=$broj_pasosa");
    }
}
$a = new Agencija('agencija');
$n = $a->select("SELECT `broj_pasosa` FROM `putnici` WHERE 1 ");
foreach($n as $red) {
    foreach($red as $val)
    foreach($val as $data)
         echo $data,"<br>";
}
echo "Prikazi dectinacije <br> <hr>";
$destinacija = $a->prikazi_destinacije();
foreach($destinacija as $red) {
    foreach($red as $val)
         echo $val,"<br>";
}
echo "Prikazi putnike <br> <hr>";

$put = $a->prikazi_putnike();
foreach($put as $red) {
    foreach($red as $val)
         echo $val,"<br>";
}
$c = $a->otkazi_rezervaciju('90');

?>
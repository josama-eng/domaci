<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Napraviti klasu Krevet, koja ima clanice: duzina, sirina, materijal i cena. Cena je private. 
Napisati konstruktor koji dobija i  postavlja sve clanice.
Napisati metodu za citanje cene.
Napisati metodu __toString koja prikazuje: "Krevet je duzine... i sirine.... napravljen od.... po ceni ...."
  -->
  <?php 
  class Krevet {
    public $duzina, $sirina, $materijal;
    protected $cena;

      public function __construct($duzina, $sirina, $materijal, $cena) {
          $this->duzina =$duzina;
          $this->sirina =$sirina;
          $this->materijal =$materijal;
          $this->cena =$cena;
      }

      public function citanje_cene() {
          return $this->cena;
      }

      public function __toString() {
          return "Krevet je duzine $this->duzina cm i sirine $this->sirina cm. Napravljen je od $this->materijal,i kosta $this->cena din";
      }

      public function popust($popust){
        $d = $popust / 100;
        $cena_sa_popustom = $this->cena * $d;
        $m = $this->cena - $cena_sa_popustom;
        return $this->cena=$m;
      }

  }
    $krevet_1 = new Krevet('210', '100', 'bukve', '70.000');
    //   echo $krevet_1;
    $krevet_2 = new Krevet('190', '105', 'hrasta', '55.000');
    //   echo $krevet_2;
    if($krevet_1->citanje_cene() > $krevet_2->citanje_cene()) {
        echo $krevet_1;
    }else {
        echo $krevet_2;
    }
    echo "<br>";
    $krevet_3 = new Krevet('200','0.5','vrbe','40000');
    $krevet_3->popust('10%');
    echo $krevet_3;


  ?>
</body>
</html>
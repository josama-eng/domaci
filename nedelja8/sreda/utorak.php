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
    include_once "ponedeljak.php";
    class Baldahin extends Krevet {
        public $visina, $cenaBaldahina;
        public function __construct($duzina, $sirina, $materijal, $cena,$visina,$cenaBaldahina){
            $this->visina = $visina;
            $this->cenaBaldahina = $cenaBaldahina;
            parent::__construct($duzina, $sirina, $materijal, $cena);
        }
        public function __toString(){
            $cena_sa_bal = $this->cena + $this->cenaBaldahina;
            return "Cena kreveta bez baldahina je $this->cena din,a cena sa baldahinom je $cena_sa_bal din.";
        }

    }
    echo "<br>";
    $bal_1 = new Baldahin('120','90','breza','35000','120','10000');
    echo $bal_1;
    
    ?>
</body>
</html>
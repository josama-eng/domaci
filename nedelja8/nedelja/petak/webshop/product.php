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
include "data.php";

class Product {
    public $id, $ime,$slika,$opis,$naslov, $cena, $grupa;

    function __construct($data) {
            $this->id = $data['id'];
            $this->ime = $data['ime'];
            $this->slika = $data['slika'];
            $this->opis = $data['opis'];
            $this->naslov = $data['naslov'];
            $this->cena = $data['cena'];
            $this->grupa = $data['grupa'];
    }

    function show_product() {
        echo "<div class='wrapper'>";
        echo "<div class='img-holder'><img src='$this->slika' alt='Part 1'/></div>";
        echo "<h2 class='title'>$this->naslov</h2>";
        echo "<a href='details.php?id=$this->id' class='btn btn1'>Read more</a>";
        echo "</div>";
    }

    function show_details(){
        echo "<div class='details_wrapper'>";
        echo "<div class='img-holder'><img src='$this->slika' alt='Part 1'/></div>";
        echo "<h2 class='title'>$this->naslov</h2>";
        echo "<p class='description'>$this->opis</p>";
        echo "<p class='price'>Price: $$this->cena</p>";
        echo "</div>";
    }
}

class ListofProucts {
    public $ob;
    function __construct() {
        $this->ob=[];
    }
    function add_products($data){
        for($i=0;$i<count($data);$i++){
            $pr = new Product($data[$i]);
            array_push($this->ob,$pr);
        }
    }
    function show_all_products($grupa="") {
       if($grupa === '') {
           foreach($this->ob as $one_pr) {
               $one_pr->show_product();
           }
       }else {
        foreach($this->ob as $one_pr){
            if($one_pr->grupa == $grupa){
                $one_pr->show_product();
            }
        }
       }
    }

    function show_one_products_details($id) {
        for($i=0; $i<count($this->ob); $i++){
            if($this->ob[$i]->id == $id)
                $this->ob[$i]->show_details();
        }
    }
}
$list = new ListofProucts();
$list->add_products($data);

class WebSite{
    function header(){
        echo "<header>";
        echo "<nav><ul><li><a href='index.php'>Home</a></li><li><img src='./img/logo.png' class='logo'></li></ul></nav>";
        echo "<div class='hero'><h1>Magic World of Harry Potter</h1><p>Dive into the world of magic and prepare for exciting adventures!</p></div>";
        echo "</header>";
    }
    function footer(){
        echo "<footer>";
        echo "<img src='./img/logo.png' class='logo'>";
        echo "<p>&copy; All rights reserved. Made by jSam.</p>";
        echo "</footer>";
    }
    function menu(){
        echo "<ul class='group'>";
            echo "<li><a href='index.php?grupa=stara'>Stare knjige</a></li>";
            echo "<li><a href='index.php?grupa=novo'>Nove knjige</a></li>";
        echo "</ul>";
    }
}
$wb = new WebSite();
?>


</body>
</html>
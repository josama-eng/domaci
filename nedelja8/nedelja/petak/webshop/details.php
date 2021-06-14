<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;600&family=Lato:wght@300;400&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
  include "product.php";
  $wb->header();
    $wb->menu();
    echo "<img src='img/divider.png' class='divider'>";
        if(!isset($_GET['id'])){
            die("Page dosen't exist.");
        }
        $id =  $_GET['id'];
    echo "<div class='details-container'>";
    $list->show_one_products_details($id);
    echo "</div>";
       
        $wb->footer();
    ?>
</body>
</html>
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
   
 
    include_once "product.php";
    $wb->header();
    echo "<img src='img/divider.png' class='divider'>";
    $wb->menu();
    echo "<div class='container'>";
        $grupa = (isset($_GET['grupa']))? $_GET['grupa'] : "";
        $list->show_all_products($grupa);
    echo "</div>";
    $wb->footer();
    ?>
 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ZADATAK 1 -->

    <?php 
    $name_1 = 'Milena';
    $name_2 = 'Anastasija';
    function n() {
        global $name_1, $name_2;
        if(strlen($name_1) > strlen($name_2)){
            echo $name_1;
        }else {
            echo $name_2;
        }
    }
    n();
    ?>
    <!-- ZADATAK 2 -->
<br>
    <?php 
    $name_3 = 'Aleksandar';
    $name_4 = 'Marko';
    function n_2() {
        global $name_3, $name_4;
        if(strlen($name_3) > strlen($name_4)){
            return $name_3;
            
        }else {
            return $name_4;
        }
    }
  
    $duze_ime = n_2();
    echo $duze_ime;
    ?>
    <br>

    <!-- ZADATAK 3 -->

    <?php 
      $name_3 = 'Aleksandar';
      $name_4 = 'Marko';
    function krace(){
        global $name_3, $name_4;
        if(strlen($name_3) < strlen($name_4)){
            echo "<h3 style='color: green'>$name_3</h3>";
            echo "<h3 style='color: red'>$name_4</h3>";
            
        }else {
            echo "<h3 style='color: red'>$name_3</h3>";
            echo "<h3 style='color: green'>$name_4</h3>";
        }
    }
    krace();
    ?>
</body>
</html>
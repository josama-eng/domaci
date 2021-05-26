<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- zadatak1 -->
    <p>Написати функцију која враћа већи од 3 броја (3 броја су прослеђени функцији кроз параметре)</p>
    <?php 
    function bigger_num($a,$b,$c) {
          if($a > $b && $a > $c) {
              return $a;
          }elseif($b > $a && $b > $c){
             return $b;
          }else{
              return $c;
          }
    }
    echo bigger_num(5,40,180)
    ?>
    <br>
    <!-- zadatak2 -->
    <p>Написати функцију која враћа div унутар којег се налази N span елемената који за текст имају
    редом бројеве од 1 до N</p>

    <?php 
    function make_div($n) {
        echo "<div>";
        for($i = 1; $i <= $n; $i++){
            echo "<span>$i</span><br>";
        }
        echo "</div>";
    }
    echo make_div(2);
    ?>
     <br>
    <!-- zadatak3 -->
    <p>Бонус задатак Написати функцију која враћа N div елемената који имају M span елемената,
    који имају текст од 1 до M</p>
    <?php 
    function make_divs($n,$m){
        for($i = 1; $i <= $n; $i++){
            echo "<div>";
            for($j = 1; $j<=$m; $j++){
                echo "<span>$j</span><br>";
            }
            echo "</div>";
        }
    }
    echo make_divs(2,4);
    ?>
</body>
</html>
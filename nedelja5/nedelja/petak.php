<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- zadatak 1 -->
    <p>Ispisati brojeve od 20 do 1 preko while ciklusa.</p>
    <?php 
        $i = 20;
        while($i>1) {
            $i--;
            echo $i ,"<br>";
        }
        
    ?>
    <br>
    <!-- zadatak 2 -->
    <p>Množiti sve brojeve od 30 ka 1, sve dok proizvod ne predje 100.000. Prikazati konacan rezultat crvenom bojom a poslednje pomnozeni broj - zelenom.</p>
    <?php
        $i=30;
        $p=1;
        $final_proizvod=1;
        while($p<=100000){
            $final_proizvod=$p;
            $p*=$i;    
            $i--;
        }
        echo "<br><span style=color:red>$final_proizvod</span><br>";
        echo "<span style=color:green>$i</span><br>";

    ?>
    <br>

    <!-- zadatak 3 -->

    <p>Prikazati brojeve od 30 do 99, ali preskociti sve one cija je prva cifra deljiva sa 3, ili je druga cifra deljiva sa 4.</p>
     <?php 
     $i = 30;
    
     while($i< 99) {
         $i++;
         if(substr($i,0,1) % 3 ==0 || substr($i,1,1) % 4 == 0) continue;
         echo $i, "<br>";
     }
     
     ?>

</body>
</html>
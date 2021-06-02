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
  
  function get_arr(){
   $inp =  $_GET["inp"];
   $x = explode(" ", $inp);
   return $x;
  }
  $niz = get_arr(); 
  echo join(" ",$niz);

   $niz_2 = [12,16,18,1024,7,9,49,58];

  function da_li_ima_3_parna_broja($niz_2) {
    $postoji = false;
    $c = 0;
    for($i=0;$i<count($niz_2);$i++){
        if($niz_2[$i] % 2 == 0){
            $c ++;
            if($c > 3){
                $postoji = true;
                break;
            }

        }
    }
    return $postoji;
  }
  echo "<br>";
  $z = da_li_ima_3_parna_broja($niz_2);
  var_dump($z);
  echo "<br>";
  function manji_od_1000($niz_2) {
      $ima = true;
      for($i=0;$i < count($niz_2);$i++){
         if($niz_2[$i] > 1000){
             $ima = false;
         }
      }
    return $ima;
  }
  $r = manji_od_1000($niz_2);
  var_dump($r);
  function  proveri_niz($niz){
     $r = manji_od_1000($niz);
     $z = da_li_ima_3_parna_broja($niz);

    echo "<br>";
    var_dump($r);
    echo "<br>";
    var_dump($z);
  }
echo proveri_niz($niz);
  ?>  
</body>
</html>
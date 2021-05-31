        <?php 
             function make_div($slika,$ime,$cena,$popust,$cena_sa_popustom) {
                 if($popust > 0) {
                     $procenat = ($popust / 100);
                     $popust_din = ($cena * $procenat);
                     $cena_sa_popustom = ($cena - $popust_din);
                     echo "<div class='proizvod'>$slika <p>$ime</p> <p style='color:red'>$cena din</p><p>$popust %</p> <p style='color:green'>Cena sa popustom je $cena_sa_popustom din</p></div>";
                 }elseif($popust == 0) {
                    echo "<div class='proizvod'>$slika <p>$ime</p> <p>$cena din</p><p>$popust </p> <p>$cena_sa_popustom</p></div>";
                 }
             }
        ?>

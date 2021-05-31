<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<style>
.oznacen {
   background-color: salmon;
}
</style>

<!-- zadatak1 -->
<p>1. Napisati fju koja za dati niz brojeva izracunava i prikazuje da li ima vise trocifrenih ili dvocifrenih brojeva. (koristiti for)</p>
<?php
function proveri_brojeve($niz)
{
    $trocifreni = 0;
    $dvocifreni = 0;
    for ($i = 0; $i < count($niz); $i++) {
        if (strlen($niz[$i]) == 3) {
            $trocifreni++;
        } elseif (strlen($niz[$i]) == 2) {
            $dvocifreni++;
        }
    }
    if ($dvocifreni < $trocifreni) {
        echo 'U datom nizu ima vise trocifrenih brojeva!';
    } elseif ($dvocifreni > $trocifreni) {
        echo 'U datom nizu ima vise dvocifrenih brojeva!';
    } elseif ($dvocifreni == $trocifreni) {
        echo 'Broj dvocifrenih i trocifrenih brojeva je isti!';
    }
}

$brojevi = ['123', '32', '542', '15', '99', '988', '456'];

proveri_brojeve($brojevi);
?>

<hr>
<!-- zadatak2 -->
<p>2. Napisati fju koja za dati niz stringova pomocu fje palindrom (radjeno na casu) ispituje i prikazuje samo palindrome tog niza. Npr za niz ['potop', 'buducnost', 'lul', 'nije'] prikazuje reci 'potop' i 'lul'.</p>

<?php
function pronadji_palindrom($niz)
{
    for ($i = 0; $i < count($niz); $i++) {
        $rec = $niz[$i];
        $palindrom = '';
        for ($o = strlen($rec) - 1; $o >= 0; $o--) {
            $palindrom .= $rec[$o];
        }
        if ($palindrom == $niz[$i]) {
            echo $niz[$i] . '<br>';
        }
    }
}

$reci = [
    'potop',
    'budicnost',
    'lul',
    'nije',
    'madam',
    'otorinolaringolog',
    'ana',
];
pronadji_palindrom($reci);
?>

<hr>
<!-- zadatak3 -->
<p>3. Napisati fju koja od niza reci pravi html listu kao meni... Npr. ['Stavka 1', 'Stavka 2', ...] pretvara u &lt;ul&gt;&lt;li&gt;Stavka 1&lt;/li&gt;&lt;li&gt;Stavka 2&lt;/li&gt;&lt;/ul&gt;.</p>

<?php
function napravi_meni($stavke)
{
    echo '<ul>';
    foreach ($stavke as $stavka) {
        echo "<li>$stavka</li>";
    }
    echo '</ul>';
}

$reci = ['Stavka 1', 'Stavka 2', 'Stavka 3', 'Stavka 4'];
napravi_meni($reci);
?>

<hr>
<!-- zadatak4 -->
<p>4. *Za vezbu, nije obavezno: prethodnoj funkciji dodati parametar $oznacen koja pokazuje koji &lt;li&gt; treba imati klasu oznacen na sledeci nacin:</p>
<p>a) Parametar oznacen predstavlja index niza (0 ili 1 ili 2...)</p>
<p>b) Parametar oznacen predstavlja sta pise u meniju ("Stavka 1", "Stavka 2",...)</p>
<p>U CSS dodati klasu oznacen - druga boja pozadine.</p>
<br><p>a) po nazivu stavke</p>
<?php
function napravi_meni_sa_oznakom_po_indexu($stavke, $oznacen)
{
    echo '<ul>';
    foreach ($stavke as $stavka) {
        if ($stavka == $oznacen) {
            echo "<li class='oznacen'>$stavka</li>";
        } else {
            echo "<li>$stavka</li>";
        }
    }
    echo '</ul>';
}

$reci = ['Stavka 1', 'Stavka 2', 'Stavka 3', 'Stavka 4'];
napravi_meni_sa_oznakom_po_indexu($reci, 'Stavka 4');
?>
<br><p>b) po indexu</p>
<?php
function napravi_meni_sa_oznakom_po_nazivu($stavke, $oznacen)
{
    echo '<ul>';
    foreach ($stavke as $ind => $stavka) {
        if ($ind == 3) {
            echo "<li class='oznacen'>$stavka</li>";
        } else {
            echo "<li>$stavka</li>";
        }
    }
    echo '</ul>';
}

$reci = ['Stavka 1', 'Stavka 2', 'Stavka 3', 'Stavka 4'];
napravi_meni_sa_oznakom_po_nazivu($reci, 'Stavka 4');
?>

<hr>
<!-- zadatak5 -->
<p>5. *Za vezbu, nije obavezno: Data su dva niza jedan koji sadrzi boje i drugi koji sadrzi reci. Prikazati svaku rec preko spana u odgovarajucoj boji. Primer: $boje = ['green', 'blue', 'yellow']; $reci = ['sto', 'stolica', 'mobilni'];</p>
<p>Rec 'sto' se prikazuje u zelenoj boji, stolica u plavoj, mobilni u zutoj.</p>

<?php
$niz1 = ['green', 'blue', 'yellow'];
$niz2 = ['sto', 'stolica', 'mobilni'];

for ($i = 0; $i < count($niz1); $i++) {
    echo "<span style='color: $niz1[$i];'>$niz2[$i]</span><br>";
}
?>

</body>
</html>


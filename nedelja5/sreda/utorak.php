<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Uneti 4 broja preko forme. U php fajlu ucitati ta 4 broja preko $_GET.
(nastavak) Proveriti uslov da li je drugi broj veci od prvog, i četvrti od treceg. Ako uslov nije ispunjen, prikazati gresku (die).
(nastavak) Ako je uslov ispunjen, izračunati 
zbir onih brojeva od prvog do drugog koji su deljivi sa 4, 
pa zbir onih brojeva od trećeg do četvrtog koji su deljivi sa 3. 
Prikazati koji je zbir veći.
</p>
    <form action="form.php" target="rezultat">
    <label for="num">Unesite cetiri broja</label> <br/>
    <input type="number" name="num_1">
    <input type="number" name="num_2">
    <input type="number" name="num_3">
    <input type="number" name="num_4">
    <input type="submit" value="Posalji">
    </form>
    <iframe id="rezultat" name="rezultat"></iframe>

</body>
</html>
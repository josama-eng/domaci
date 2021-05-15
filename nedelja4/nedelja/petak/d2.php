<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d2</title>
</head>
<body>
    <?php 
    $ime_prezime = "";
    if(isset($_GET["ime_prezime"]))
    $ime_prezime = $_GET["ime_prezime"];
    $prvo_slovo = strtoupper(substr($ime_prezime,0,1));
    $razmak = strpos($ime_prezime, " ", 1);
    $razmak_1 = $razmak + 1;
    $drugo_slovo = strtoupper(substr($ime_prezime,$razmak_1,1));
    echo "$prvo_slovo.$drugo_slovo.";
    ?>
</body>
</html>
<?php
var_dump($_GET);

// kontrola zdali byl formular odeslan
if (array_key_exists("odeslat", $_GET))
{
    echo "<h2>Formulář byl odeslán</h2>";

    $jmeno = $_GET["jmeno"];
    $vek = $_GET["vek"];
    $heslo = $_GET["heslo"];
    echo "Jméno: $jmeno, věk: $vek, heslo: $heslo";
}
?>
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
    ?>

    <form method="get">
        Jméno: <input type="text" name="jmeno">
        <br>

        Věk: <input type="text" name="vek">
        <br>
        
        Heslo: <input type="password" name="heslo">
        <br>

        <input type="submit" name="odeslat" value="Odeslat">
        <button name="odeslat">Odeslat</button>
    </form>
</body>
</html>

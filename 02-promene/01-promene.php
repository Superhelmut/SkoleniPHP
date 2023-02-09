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
        // vytvoreni promenne
        $jmeno = "Karel";

        // vypsani promenne
        echo $jmeno;

        echo "<br>";
        $jmeno = "Josef";

        echo $jmeno;

        // uvnitr uvozovek je mozno pouzivat promenne
        // a bude na jejich miste pouzita jejich hodnota
        echo "Moje jméno je: $jmeno <br>";

        // POZOR!!! text v aspotrofech nepouziva
        // promenne a vypise pouze dolar+dany nazev
        echo 'Moje jméno je: $jmeno <br>';

        // promenna typu integer
        $vek = 37;
        echo "Můj věk je : $vek <br>";

        // promenna muze byt uvnitr slozenych zavorek
        // pro upresneni kde promenna zacina a konci
        // napr. pokud za promennou neni mezera
        $cas = 5;
        echo "Trvalo to {$cas}m <br>";

        // promenna typu float/double
        $cena = 9.9;
        echo "Cena piva je $cena <br>";

        // promenna typu boolean
        $dneskaJePatek = true;
        $dneskaJePondeli = false;
        echo "Dneska je pátek: $dneskaJePatek <br>";
        echo "Dneska je pondělí: $dneskaJePondeli <br>";

        // var_dump slouzi k vypisu informaci o promenne
        // jakeho je datoveho typu a jakou ma hodnotu
        var_dump($dneskaJePondeli);

        // promenna bez hodnoty
        $cisloUctuveSvycarsku = null;
    ?>
</body>
</html>
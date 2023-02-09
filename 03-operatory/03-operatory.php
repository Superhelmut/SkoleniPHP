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
    $cislo = 7;

    // operator modulo - vraci zbytek po celociselnem
    // deleni
    $zbytek = $cislo % 3; // zbyde 1
    var_dump($zbytek);

    $vek = 60;
    // zvednout vek o 1
    $vek = $vek + 1;
    $vek++;

    var_dump($vek); // 62

    $vek--; // ponizi o 1
    var_dump($vek);

    $vek += 3; // zvysi o 3
    var_dump($vek); // 64

    $vek -= 2;
    var_dump($vek); // 62

    // operator porovnani
    $jeMi40 = $vek == 40;
    var_dump($jeMi40); // false

    // operator 'nerovna se'
    $neniMi40 = $vek != 40;
    var_dump($neniMi40); // true

    $jsemDospely = $vek >= 18;
    var_dump($jsemDospely); // true

    var_dump("1234" == 1234); // true
    var_dump("1234" === 1234); // false - protoze se lisi datove typy

    // logicke operatory
    $vek = 40;
    $pohlavi = "žena";
    // logicky AND (obe hodnoty museji byt true)
    $dospelyMuz = $vek >= 18 && $pohlavi == "muž";
    var_dump($dospelyMuz);
    // logicky OR (alespon jedna hodnota je true)
    $muzNeboZena = $pohlavi == "muž" || $pohlavi == "žena";
    var_dump($muzNeboZena);

    $cislo = 4;
    $cisloJeMezi5A18 = $cislo >= 5 && $cislo <= 18;
    var_dump($cisloJeMezi5A18);

    // negace - vraci obracenou boolean hodnotu
    $nejsemDospely = !$jsemDospely;
    var_dump($nejsemDospely); // false

    // operator pro lepeni stringu
    echo "Aktuální rok: ";
    echo date("Y");
    echo "<br>";
    echo "Aktuální rok: ".date("Y");


	//úkol
    $vek = 40;
    echo "<h1>Věk: $vek</h1>";

    $letOdPoslednichKulatin = $vek % 10;
    var_dump($letOdPoslednichKulatin);

    $letDoPristichKulatin = 10 - $letOdPoslednichKulatin;
    echo "Do přístích kulatin ti zbývá $letDoPristichKulatin let";

    echo "<br>";
    echo "Do přístích kulatin ti zbývá ".(10-$vek%10)." let";

    
	$jmeno = "vit";
	$prijmeni = "rezac";

	echo '<b>'.$jmeno. ' ' .$prijmeni. '</b>';

	?>
</body>
</html>
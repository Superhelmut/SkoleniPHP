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
    $pocetVterin = time();
    var_dump($pocetVterin);

    $timestampZaHodinu = strtotime("+1 hour");

    $cas = date("G:i:s", $timestampZaHodinu);
    echo $cas;

    $cislo = 123456.789;
    $vysledek = round($cislo, 2);
    var_dump($vysledek);

    echo number_format($cislo, 1, ",", " ");

    $slovo = "čáp";
    $delka = mb_strlen($slovo);
    var_dump($delka);

    $uryvek = mb_substr($slovo, 0, 1);
    echo $uryvek;



	//úkoly

	echo date('Y');
	$rok = strtotime("+1 year");
	echo date("Y", $rok);
	echo "<br>";
	echo date("d-M-Y", easter_date(2023)); 


	$polomer = rand(1,100);
	echo "<br>$polomer<br>";
	

	$polomerKruhu = (2*pi())*$polomer;
	$polomerKruhu = round($polomerKruhu,2);
	echo "$polomerKruhu";




    $veta = "Skákal pes přes oves";
    echo "<h1>Věta: $veta</h1>";

    $slova = explode(" ", $veta);
    var_dump($slova);

    $pocetSlov = count($slova);
    echo "Počet slov: $pocetSlov";

	$posledniSlovo = $slova[$pocetSlov-1];
	echo $posledniSlovo;






	echo "<br>";
	$pole = [];
	echo "<table border=1>";
	echo "<tr><th>Poloměr</th><th>Obvod</th></tr>";
	for($cisla = 1;$cisla <=20;$cisla++)
	{
		$nahodnaCisla = rand(1,100);
		if(in_array($nahodnaCisla,$pole) == false)
		{
			$pole [] = $nahodnaCisla;

		}
		else
		{
			$cisla--;
		}

		echo $cisla;

	}

	foreach($pole as $polomer)
	{
		$obdod = (2 * pi())*$polomer;
		$obdod = round($obdod,2);
		echo "<tr><td>$polomer</td><td>$obdod</td></tr>";
	}
	echo "</table>"
	




    ?>
</body>
</html>
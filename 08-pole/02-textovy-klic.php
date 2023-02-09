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
    $pocetObyvatelPodleMesta = [
        "Praha" => 1000000,
        "Brno" => 400000,
        "Liberec" => 100000,
    ];
    var_dump($pocetObyvatelPodleMesta);

    echo "Počet obyvatel v Praze: ";
    echo $pocetObyvatelPodleMesta["Praha"];

    echo "Počet obyvatel v Praze: {$pocetObyvatelPodleMesta['Praha']}";

    // pridani polozky
    $pocetObyvatelPodleMesta["Plzeň"] = 300000;
    var_dump($pocetObyvatelPodleMesta);

    // odebirani polozky
    unset($pocetObyvatelPodleMesta["Liberec"]);
    var_dump($pocetObyvatelPodleMesta);

    // prochazeni pole
    foreach ($pocetObyvatelPodleMesta as $mesto => $pocetObyvatel)
    {
        echo "Počet obyvatel v $mesto je $pocetObyvatel <br>";
    }


	//úkol


	$zvirata =[
		"Slon" => 4,
		"Had" => 0,
		"Papoušek" => 2
	];

	echo "<table border=1>";
	echo "<tr><th>Zvíře</th><th>Počet nohou</th><tr>";
	foreach($zvirata as $klic => $hodnota)
	{
		echo "<tr><td>$klic</td><td>$hodnota</td><tr>";
	}
	
	echo "</table>";


	$lideMesta = [
		"Brno" => ['Karel', 'Josef'],
		"Praha" => ["Ema", "Jana"]
	];

	echo "<table border=1>";
	echo "<tr><th>Město</th><th>Lidé</th><tr>";   
	foreach($lideMesta as $klic => $hodnota)
	{
		echo "<tr><td>$klic</td><td>";
		echo "<ul>";
		foreach($hodnota as $jmeno)
		{
			echo "<li>$jmeno</li>";

		}
		echo "</ul>";
	}
	echo "</table>";






	$mesto = [
		"Brno" => $brno = [
			"Počet obyvatel" => "100000",
			"Rozloha" => "562",
			"Počet ulic" => "21",
			"Politiků" => "6"
		],
		"Praha" => $praha = [
			"Počet obyvatel" => "1007000",
			"Rozloha" => "5652",
			"Počet ulic" => "213",
			"Politiků" => "62"	
		]
	];

	echo "<table border=1>";
	echo "<tr><th>Město</th><th>Rozloha</th><th>Počet ulic</th><tr>";   

	foreach($mesto as $nazevMesta => $hodnoty)
	{
		echo "<tr><td>$nazevMesta</td>";
		foreach($hodnoty as $klic => $cisla)
		{
			if($klic == "Rozloha")
			{
				echo "<td>$cisla</td>";
			}
			if($klic == "Počet ulic")
			{
				echo "<td>$cisla</td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";

	?>
</body>

</html>
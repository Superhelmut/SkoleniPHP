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
    $i = 1;
    while ($i <= 10)
    {
        echo "$i <br>";
        $i++;
    }
	echo "<br>";
	//úkol
	$nadpis = 1;
	while($nadpis <= 6){
		echo "<h$nadpis>h$nadpis</h$nadpis><br>";
		$nadpis++;
	}





	$pocetMysi = 2;
	$pocetLet = 0;
	echo "<table border=1>";
	echo "<tr><th>Rok</th><th>Počet myší</th></tr>";

	while($pocetMysi <= 3000000){
		$i = $pocetMysi;
		$pocetMysi = $pocetMysi/2;
		$pocetMysi = $pocetMysi*8;
		$pocetMysi = $pocetMysi + $i;

		$pocetLet++;
		echo "<tr><td>$pocetLet</td><td>$pocetMysi</td></tr>";

	}
	echo "</table>";




    ?>
</body>
</html>
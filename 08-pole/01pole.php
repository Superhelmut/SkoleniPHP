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
    $mesice = array("leden", "únor", "březen");
    // to same jinou syntaxi
    $mesice = ["leden", "únor", "březen"];

    var_dump($mesice);

    echo "Druhý měsíc v roce je: ";
    echo $mesice[1]; // cislovani od nuly!

    // pridani do pole
    $mesice[] = "duben";
    $mesice[] = "květen";
    var_dump($mesice);

    // odebirani polozek z pole
    // odebrani unora
    unset($mesice[1]);
    var_dump($mesice);

    // prochazeni pole
    foreach ($mesice as $index => $mesic)
    {
        echo ($index + 1)." měsíc v roce je $mesic <br>";
    }

    // zkracena syntaxe bez promenne s klicem
    foreach ($mesice as $mesic)
    {
        echo "$mesic <br>";
    }


	//úkol
	$mesta = ["Praha", "Brno","Ostrava"];
	echo "<table border=1>";
	echo "<tr><th>Města</th><tr>";
	foreach($mesta as $mesto)
	{
		echo "<tr><td>$mesto</td></tr>";

	}

	echo "</table";



	$lidi = ["Karel","Jan","Petr"];
	echo "<table>";
	echo "<ol>";
	foreach($lidi as $lid)
	{
		echo "<li>$lid</li>";
	}
	echo "</ol>";
	echo "</table>";

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="cs">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php

	function vypisTabulku($pole)
	{
		echo "<table border=1>";
		foreach ($pole as $obsah)
		{
			echo "<tr>";
			foreach($obsah as $klic => $hodnota)
			{
				echo "<td>$hodnota</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		return $hodnota;
	}

	$pole = [
		["Koza", 4],
		["Had", 0],
		["Kočka", 3],
	];
	vypisTabulku($pole);
	
	$pole = [
		["Česká republika", "Praha", 10700000],
		["Německo", "Berlín", 83240000],
		["Rusko", "Moskva", 144100000],
	];
	vypisTabulku($pole);
	?>

</body>
</html>
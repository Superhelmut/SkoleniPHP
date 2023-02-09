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
		$lidi = [
			"1" => [
				"jmeno" => "Karel",
				"pohlavi" => "muž"
			],
			"2" => [
				"jmeno" => "Jana",
				"pohlavi" => "žena"
			],
			"3" => [
				"jmeno" => "Karel",
				"pohlavi" => "muž"
			],
			"4" => [
				"jmeno" => "Pavla",
				"pohlavi" => "žena"
			],
		];
		echo "<table border=1>";
		foreach($lidi as $klic)
		{
			echo "<tr>";

			foreach ($klic as $popis => $udaje)
			{
				if($popis == "jmeno")
				{
					echo "<td><b>$udaje</b></td>";
				}	
				if($popis == "pohlavi")
				{
					if($udaje == "žena")
					{
						echo "<td class='zena'>$udaje</td>";

					}
					else
					{
						echo "<td class='muz'>$udaje</td>";
	
					}
				}	
				
			}
			echo "</tr>";

		}

		echo "</table>";
	?>
	<style>
		.zena{
			background-color: red;
		}
		.muz{
			background-color: blue;
		}
	</style>
</body>
</html>
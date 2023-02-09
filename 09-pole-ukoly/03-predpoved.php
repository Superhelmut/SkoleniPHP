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
		$predpoved = [
			"Praha" => [
				"Datum" => [
					"16.9." => [
					"Teplota" => "10.5 °C",
					"Popis" => "jasno"
					],
					"17.9." => [
						"Teplota" => "11 °C",
						"Popis" => "zima"
					],
					"18.9." => [
						"Teplota" => "21 °C",
						"Popis" => "vedro"
					],
				],
			],
			"Brno" => [
				"Datum" => [
					"16.9." => [
					"Teplota" => "12.5 °C",
					"Popis" => "polojasno"
					],
					"17.9." => [
						"Teplota" => "14 °C",
						"Popis" => "jasno"
					],
					"18.9." => [
						"Teplota" => "25 °C",
						"Popis" => "nejasno"
					],
				],
			],
			"Liberec" => [
				"Datum" => [
					"16.9." => [
					"Teplota" => "23.5 °C",
					"Popis" => "zima"
					],
					"17.9." => [
						"Teplota" => "18 °C",
						"Popis" => "polojasno"
					],
					"18.9." => [
						"Teplota" => "32 °C",
						"Popis" => "vedro"
					],
				],
			],
			"Olomouc" => [
				"Datum" => [
					"16.9." => [
					"Teplota" => "16 °C",
					"Popis" => "polojasno"
					],
					"17.9." => [
						"Teplota" => "13 °C",
						"Popis" => "zataženo"
					],
					"18.9." => [
						"Teplota" => "48 °C",
						"Popis" => "extrémní vedro"
					],
				],
			],

		];

		foreach($predpoved as $mesto => $datum)
		{

				echo "<h2>$mesto</h2>";

				echo "<table border=1>";
				echo "<tr><b><th>Datum</th><th>Teplota</th><th>Popis</th></b></tr>";

				foreach($datum as $data => $hodnoty)
				{

					foreach($hodnoty as $pocasi => $predpovedPocasi)
					{
						echo "<tr><td>$pocasi</td>";

						foreach($predpovedPocasi as $teplota => $udaje)
						{
							echo "<td>$udaje</td>";
						}
						echo "</tr>";
					}
	
				}

				echo "</table>";

			

		}

	?>
	<style>

	</style>
</body>
</html>
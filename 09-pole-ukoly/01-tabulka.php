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
		$barvy = [
			"modra" => "modrá",
			"cervena" => "červená",
			"zelena" => "zelená"
		];

		echo "<table border=1>";
		foreach($barvy as $barva => $hodnota)
		{
			echo "<tr>";
			if($barva == "modra")
			{
				echo "<td class='modra'>$hodnota</td>";

			}
			if($barva == "cervena")
			{
				echo "<td class='cervena'>$hodnota</td>";

			}
			if($barva == "zelena")
			{
				echo "<td class='zelena'>$hodnota</td>";

			}
			echo "</tr>";
		}
		echo "</table>";
	?>
	<style>
		.modra{
			background-color: blue;
		}
		.cervena{
			background-color: red;
		}
		.zelena{
			background-color: green;
		}
	</style>
</body>
</html>
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

	echo "<table border=1>";
		$pocetPrikladu = 10;
		for($pocetRadku = 1; $pocetRadku <= $pocetPrikladu; $pocetRadku++)
		{
			$prvni = rand(0,10);
			$druhy = rand(0,10);
			if($prvni + $druhy <= 10)
			{
				echo "<tr><td>$prvni + $druhy = </tr></td>";
			}
			else
			{
				$pocetPrikladu++;
			}

		
		}
		$pocetPrikladu2 = 10;
		for($pocetRadku2 = 1; $pocetRadku2 <= $pocetPrikladu2; $pocetRadku2++)
		{
			$prvni2 = rand(0,10);
			$druhy2 = rand(0,10);

			if($druhy2 - $prvni2 <= 10 && $druhy2 - $prvni2 >=1)
			{
				echo "<tr><td>$druhy2 - $prvni2 = </tr></td>";
			}
			else
			{
				$pocetPrikladu2++;
			}
		}



	echo "</table>";
	?>
</body>
</html>
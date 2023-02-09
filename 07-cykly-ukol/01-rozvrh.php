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

	for($radky = 1; $radky <= 5;$radky++)
	{
		if($radky == 1)
		{
			$den = 'Po';
		}
		else if($radky == 2)
		{
			$den = 'Út';
		}
		else if($radky == 3)
		{
			$den = 'St';
		}
		else if($radky == 4)
		{
			$den = 'Čt';
		}
		else if($radky == 5)
		{
			$den = 'Pá';
		}

		echo "<tr class='border'>";
		echo "<th>$den</th>";
		for($sloupce = 1; $sloupce <=5;$sloupce++)
		{
			echo "<td class='border'></td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	?>
</body>
</html>
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
		for($radky = 1; $radky <= 7;$radky++)
		{
			echo "<tr>";
			for($sloupce = 1; $sloupce <=8;$sloupce++)
			{
				
				if($radky == 1 || $radky == 3 || $radky == 5 || $radky == 7)
				{
					if($sloupce == 2 || $sloupce == 4 || $sloupce == 6 || $sloupce == 8)
					{
						echo "<td class='tmava'></td>";
					}
				}

				if($radky == 2 || $radky == 4 || $radky == 6 || $radky == 8)
				{
					if($sloupce == 1 || $sloupce == 3 || $sloupce == 5 || $sloupce == 7)
					{
						echo "<td class='tmava'></td>";
					}
				}
				if($radky == 2 || $radky == 4 || $radky == 6 || $radky == 8)
				{
					if($sloupce == 2 || $sloupce == 4 || $sloupce == 6 || $sloupce == 8)
					{
						echo "<td class='bila'></td>";
					}
				}
				if($radky == 1 || $radky == 3 || $radky == 5 || $radky == 7)
				{
					if($sloupce == 1 || $sloupce == 3 || $sloupce == 5 || $sloupce == 7)
					{
						echo "<td class='bila'></td>";
					}
				}
				

			}
			echo "</tr>";
		}
		echo "</table>";
	?>
<style>
	.tmava{
		width: 80px;
		height: 80px;
		background-color: grey;
	}
	.bila{
		width: 80px;
		height: 80px;
	}
</style>
</body>

</html>
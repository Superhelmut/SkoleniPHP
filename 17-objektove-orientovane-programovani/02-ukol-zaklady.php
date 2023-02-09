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

		class Auto
		{ 
			public $znacka;
			public $rokVyroby;

			function __construct($znacka, $rokVyroby)
			{
				$this->znacka = $znacka;
				$this->rokVyroby = $rokVyroby;
			}

			function stari()
			{
				$datum = date("Y");
				$vysedek = $datum - $this->rokVyroby;
				return $vysedek;
			}
		} 

		$skoda = new Auto("Škoda", "1985");

		$audi = new Auto("Audi", "2000");

		$auta =[$skoda, $audi];

//		var_dump($auta);

		echo "<table border=1>";
		echo "<tr><th>Značka</th><th>Rok výroby</th></tr>";
		foreach($auta as $nazev)
		{
			echo "<tr>
			<td>{$nazev->znacka}</td>
			<td>{$nazev->rokVyroby}</td>
			<td>{$nazev->stari()}</td>

		</tr>";

		}
	?>
</body>
</html>
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

use Auto as GlobalAuto;

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

		class SpalovaciMotor extends Auto
		{
			public $obsahMotoru;
			public $objemNadrze;

			function __construct($znacka, $rokVyroby, $obsahMotoru, $objemNadrze)
			{
				parent::__construct($znacka, $rokVyroby);
				$this->objemNadrze = $objemNadrze;
				$this->obsahMotoru = $obsahMotoru;
			}
		}

		class Elektro extends Auto
		{
			public $dojezd;
			public $velikostBaterie;

			function __construct($znacka, $rokVyroby, $dojezd, $velikostBaterie)
			{
				parent::__construct($znacka, $rokVyroby);
				$this->dojezd = $dojezd;
				$this->velikostBaterie = $velikostBaterie;
			}
		}

		$skoda = new SpalovaciMotor("Škoda", "1985","2002","45");

		$audi = new Elektro("Tesla", "2000","200","20kw");

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
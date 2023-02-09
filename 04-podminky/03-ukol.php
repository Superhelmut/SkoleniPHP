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
		$vek = 46;
			echo "<h1>Věk: $vek</h1>";

			$letOdPoslednichKulatin = $vek % 10;
			var_dump($letOdPoslednichKulatin);

			$letDoPristichKulatin = 10 - $letOdPoslednichKulatin;
			

			echo "<br>";
			if($letDoPristichKulatin <= 4){
				echo "Do přístích kulatin ti zbývá $letDoPristichKulatin roky";

			}
			else{
				echo "Do přístích kulatin ti zbývá $letDoPristichKulatin let";

			}

			$cislo = 6;
			$vysledek = $cislo % 2;
			echo $cislo ."<br>";

			if($vysledek == 1){
				echo "liché číslo";
			}
			else if($cislo == 0){
				echo "číslo je 0";
			}
			else{
				echo "sudé číslo";
			}



			$vek = 18;
			$pohlavi = "žena";

			if($vek >= 18){
				echo "přístup povolen <br>";
				if($pohlavi == "muž"){
					echo "stránka pro muže";
				}
				else{
					echo "stránka pro ženy";
				}
			}
			else{
				echo "přístup zamítnut";
			}
	?>
</body>
</html>
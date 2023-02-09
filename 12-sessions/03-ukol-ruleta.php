<?php

session_start();

if(array_key_exists("konto",$_SESSION) == false)
{
	$_SESSION["konto"] = [$pocatecniVklad = 100]; 
	echo "špatný ";
}
else
{
	$_SESSION["konto"];
	echo "dobrý ";
}

if(array_key_exists("zatocit",$_POST))
{
	$cislo = rand(1,100);
	$tip = $_POST["vyber"];
	$sazka = $_POST["cislo"];
	$liche = $cislo % 2; 
	if($liche == 0)
	{
		if($tip == "suda")
		{
			$vysledek = "Výhra!!";
		}
		else
		{
			$vysledek = "Prohra :(";
		}


	}
	else
	{
		if($tip == "licha")
		{
			$vysledek = "Výhra!!";
		}
		else
		{
			$vysledek = "Prohra :(";
		}
	}
}
function vyhra ($penize)
{
	return number_format($penize, 0, ",", " "). " Kč";
}
?>


<!DOCTYPE html>
<html lang="cs">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="post">
		<h1>Ruleta</h1>
		<h2><?php echo "Padlo číslo: <span style='color:orange'>$cislo</span>";  ?></h2>
		<h2 class="vysledek"><?php echo $vysledek;  ?></h2>

		<h2>Stav konta: 
			<?php 
			if($vysledek == "Výhra!!")
			{
				foreach($_SESSION["konto"] as $pocatecniVklad => $stavKonta)
				{
					$pocatecniVklad = $stavKonta + $sazka;
					unset($_SESSION["konto"][$pocatecniVklad]);

					$_SESSION["konto"] = [$pocatecniVklad];
					echo vyhra($pocatecniVklad);
				}		
				$barva = "green";

			}
			else if($vysledek == "Prohra :(")
			{
				foreach($_SESSION["konto"] as $pocatecniVklad => $stavKonta)
				{
					$pocatecniVklad = $stavKonta - $sazka;
					unset($_SESSION["konto"][$pocatecniVklad]);
					$_SESSION["konto"] = [$pocatecniVklad];
					echo vyhra($pocatecniVklad);
				}	
				$barva = "red";			
			}
		
			?>
		</h2>


	Sázka: <input type="number" name="cislo" value="<?php echo $sazka; ?>"> 
	<br>
	Sudé/liché: <select name="vyber" id="">
		<option value="">Výběr</option>
		<option value="suda" <?php if($tip == "suda"){echo "selected";} ?>>Sudá</option>
		<option value="licha" <?php if($tip == "licha"){echo "selected";} ?>>Lichá</option>
	</select>
	<br>
	<button name="zatocit">Zatočit</button>
	</form>

	<style>
		.vysledek{
			color: <?php echo $barva; ?>;
		}
	</style>
</body>
</html>
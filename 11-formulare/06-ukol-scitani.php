<?php
$chyba = null;
$vysledek= null;
$vseOk = null;
	if(array_key_exists("odeslat", $_GET))
	{
		$prvni = $_GET["prvni"];
		$druhy = $_GET["druhy"];

		if($prvni == "" || $druhy == "")
		{
			$chyba = "Vyplňte všechny pole";
		}

		else if(is_numeric($prvni) == false || is_numeric($druhy) == false)
		{
			$chyba = "Zadávejte pouze čísla";
		}

		else
		{
			$vseOk = true;
			$vysledek = $prvni + $druhy;
		}
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
	<?php

	if($vseOk == false)
	{
		?>
		<form>
			<input type="text" name="prvni"> 
			+
			<input type="text" name="druhy"> 
			=
			<button name="odeslat">Sečíst</button>
		</form>
		<br>
		<?php echo $chyba;?>

		<?php
	}

	else
	{

		?>
		<form>
			<input type="text" name="prvni" value="<?php echo $prvni;?>"> 
			+
			<input type="text" name="druhy" value="<?php echo $druhy;?>" > 
			=
			<?php echo $vysledek;?>
			<button name="odeslat">Sečíst</button>
		</form>
		<?php
	}
	

	?>

</body>
</html>
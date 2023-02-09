<?php
$chybaJmeno= null;
$chybaPohlavi = null;
$chybaVek = null;
$chybaZnaky = null;
$vseOk = null;
$druh = null;

	if(array_key_exists("odeslat", $_GET))
	{
		$jmeno = $_GET["jmeno"];
		$vek = $_GET["vek"];
		$pohlavi = $_GET["pohlavi"];
		$znaky = mb_strlen($_GET["jmeno"]);
		if ($jmeno == "")
		{
			$chybaJmeno = "Pole musí být vyplněné";
		}

		else if ($znaky<=2)
		{
			$chybaJmeno = "Vyplňte minimálně tři znaky";
		}
		if ($vek == "")
		{
			$chybaVek = "Pole musí být vyplněné";
		}
		else if (is_numeric($vek) == false)
		{
			$chybaVek = "Pole musí obsahovat čísla";

		}
		else if($_GET["vek"] <= 17)
		{
			$chybaVek = "Vstup pouze pro dospělé";
		}
		if ($pohlavi == "")
		{
			$chybaPohlavi = "Vyberte pohlaví";
		}
		else if ($pohlavi == "muz")
		{
			$druh = "Muž";
		}
		else if ($pohlavi == "zena")
		{
			$druh = "Žena";
		}

		if($chybaJmeno == 0 || $chybaPohlavi == 0 || $chybaVek == 0 || $chybaZnaky == 0)
		{
			$vseOk = true;
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
			<form method="get">
				Jméno: <input type="text" name="jmeno"> <?php echo $chybaJmeno;?>
				<br>
				Věk: <input type="text" name="vek"> <?php echo $chybaVek;?>
				<br>
				Pohlaví: <select name="pohlavi"> 
					<option value="">Vyberte</option>
					<option value="muz">Muž</option>
					<option value="zena">Žena</option>
				</select>
				<?php echo $chybaPohlavi;?>
				<br>
				<button name="odeslat">Zaregistrovat se</button>
			</form>


			<?php
		}
		else
		{
			?>
			<table border=1>
				<tr>
					<th>Jméno</th>
					<td><?php echo $jmeno;?></td>
				</tr>
				<tr>
					<th>Věk</th>
					<td><?php echo $vek;?></td>
				</tr>
				<tr>
					<th>Pohlaví</th>
					<td><?php echo $druh;?></td>
				</tr>
			</table>
			<form>			
				<button name="zpet">Zpět</button>
			</form>
			<?php
		}
	?>

</body>
</html>
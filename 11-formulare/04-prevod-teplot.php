<?php
$celsia1 = null;
$farhait = null;

	if(array_key_exists("odeslatC",$_GET))
	{
		$celsia = $_GET["celsia"];

		$farhait = ($celsia*1.8)+32;
	}
	if(array_key_exists("odeslatF",$_GET))
	{
		$farhait1 = $_GET["farhait"];

		$celsia1 = ($farhait1-32)/1.8;
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
	<form>
		C: <input type="text" name="celsia" value="<?php echo $celsia1;?>">
		<button name="odeslatC">></button>
		<button name="odeslatF"><</button>
		F: <input type="text" name="farhait" value="<?php echo $farhait;?>">
	</form>
</body>
</html>
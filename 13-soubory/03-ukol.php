<?php

if(array_key_exists("ulozit",$_GET))
{
	$text = $_GET["text"];
	file_put_contents("soubor.txt", $text);
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
		<textarea name="text" id="" cols="100" rows="30"><?php 
			        if (file_exists("soubor.txt"))
					{
						$obsah = file_get_contents("soubor.txt");
						echo $obsah;
					}
			
		?></textarea> <br>
		<button name="ulozit">Uložit</button>
	</form>
	
</body>
</html>
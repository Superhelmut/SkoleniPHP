<?php

$vysledek = null;


if(array_key_exists("odeslat",$_POST))
{
	$text = $_POST["number"];

    $ok = preg_match("/^(\\+420)?[1-9][0-9]{8}$/", $text);

	if ($ok)
    {
        $vysledek = "$telefon vypadá jako telefon";
    }
    else
    {
        $vysledek = "$telefon NEvypadá jako telefon";
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
	<form method="post">
		Tel: <input type="text" name="number">
		<button name="odeslat">Odeslat</button>
	</form>
	<?php
		echo $text;
	?>
</body>
</html>
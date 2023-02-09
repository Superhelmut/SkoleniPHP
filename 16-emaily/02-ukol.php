<?php

if(array_key_exists("odeslat",$_GET))
{
	$jmeno = $_GET["jmeno"];
	$email = $_GET["email"];
	$telefon = $_GET["telefon"];
	$zprava = $_GET["zprava"];

	$telOk = preg_match("/^(\\+420)?[1-9][0-9]{8}$/", $telefon);

	if ($telOk)
    {
        $telOk = "ok";
    }
    else
    {
        $vysledek = "$telefon špatný formát";
    }

	$emailOk = preg_match("/.*@*.\\.*./gm", $email);
	
	if ($email)
    {
        $email = "ok";
    }
    else
    {
        $vysledek = "$email špatný formát";
    }

	if($telOk == "ok" && $emailOk == "ok")
	{
		mb_send_mail(
			"vit@rezac.info",
			"Máš email",
			$zprava,
			["From" => "$jmeno <$email>"]
		);
		echo "Odesláno";
	
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
	<form>
		Vaše jméno: <input type="text" name="jmeno">
		<br>
		E-mail: <input type="text" name="email">
		<br>
		Telefon: <input type="text" name="telefon">
		<br>
		Zpráva: <textarea name="zprava" id="" cols="30" rows="10"></textarea>
		<br>
		<button name="odeslat">Odeslat</button>
		

	</form>
</body>
</html>
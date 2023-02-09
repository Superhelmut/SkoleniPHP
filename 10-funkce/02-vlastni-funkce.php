<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function obvodKruhu($polomer)
    {
        $obvod = 2 * pi() * $polomer;
        return $obvod;
    }

    // zkouska zavolani nasi funkce s polomerem 5
    $vysledek = obvodKruhu(5);
    var_dump($vysledek);


	function farhait($celsia)
	{
		$farhait = (1.8 * $celsia) + 32;
		return $farhait;
	}
	function celsia($farhait)
	{
		$celsia = ($farhait - 32) /1.8;
		return $celsia;
	}

	$vysledekC = celsia(52);
	$vysledekF = farhait(12);
	var_dump($vysledekC);
	var_dump($vysledekF);


	function kontrola($co,$kde)
	{
		$secteno = 0;
		foreach($kde as $polozka)
		{
			if($polozka == $co)
			{
			$secteno++;

			}

		}
		return $secteno;
	}
	$jmena = ["jana", "karel", "jana"];
	$vysledek = kontrola("jana",$jmena);
	echo $vysledek;


    ?>
</body>
</html>
<?php
$vypocet = null;
$chyba = null;

	if(array_key_exists("odeslat", $_POST))
	{
		$polomer = $_POST["polomer"];
		if($polomer == "")
		{
			$chyba = "musí být vyplněno";
		}
		
		else if(is_numeric($polomer) == false)
		{
			$chyba = "musí být číslo";
		}
		else if ($polomer < 0)
		{
			$chyba = "musí být kladné číslo";
		}
		else if ($polomer == 0)
		{
			$chyba = "nesmí být nula";
		}
		else
		{
			$vypocet = (2*pi())*$polomer;
			$vypocet = round($vypocet,2);
	
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
		Poloměr: <input type="text" name="polomer" value="<?php echo $polomer;?>"> 
		<?php
			echo $chyba;
		?>
		<button name="odeslat">Odeslat</button>
	</form>
	<?php
	if($vypocet != null)
	{
		echo "Obvod kruhu je: $vypocet";	
		
	}





	echo "<table border=1>";
    echo "<tr>";
    for($hSlopec = null; $hSlopec <=10; $hSlopec++){
        echo "<th class='zelena'>$hSlopec</th>";
    }
    echo "</tr>";
    for($radka = 1; $radka <= 10; $radka++){
        echo "<tr>";
        echo "<th class='zelena'>$radka</th>";
        for($sloupec = 1; $sloupec <= 10; $sloupec++){
            $nasobeni = $radka*$sloupec;
            echo "<td>$nasobeni</td>";
        }
        

        echo "</tr>";
    }
	?>
</body>
</html>
<?php
session_start();

if (array_key_exists("kosik", $_SESSION) == false)
{
    $_SESSION["kosik"] = [];
}

$produkty = [
    "RI038b3" => [
        "nazev" => "iPhone 13 Pro 128GB grafitově šedá",
        "cena" => 28990,
    ],
    "GPX1068b1" => [
        "nazev" => "Google Pixel 6 Pro 5G 12GB/128GB černá",
        "cena" => 26990,
    ],
    "SAMO0223b2" => [
        "nazev" => "Samsung Galaxy A52s 5G černá",
        "cena" => 11499,
    ],
];

// zpracovani tlacitka Pridat
if (array_key_exists("pridat", $_POST))
{
    $kodProduktu = $_POST["pridat"];
    //echo $kodProduktu;
    if (array_key_exists($kodProduktu, $_SESSION["kosik"]) == false)
    {
        $_SESSION["kosik"][$kodProduktu] = 1;
    }
    else
    {
        $_SESSION["kosik"][$kodProduktu]++;
    }
    //var_dump($_SESSION);
    header("Location: ?");
}

// zpracovani tlacitka Odebrat
if (array_key_exists("odebrat", $_POST))
{
    $kodProduktu = $_POST["odebrat"];
    $_SESSION["kosik"][$kodProduktu]--;
	if($_SESSION["kosik"][$kodProduktu] == 0)
	{
		unset($_SESSION["kosik"][$kodProduktu]);
	}
	header("Location: ?");

}

if(array_key_exists("vysypat",$_POST))
{
	$_SESSION["kosik"] = [];
	header("location: ?");
}

function cenaProduktu ($cena)
{
	return number_format($cena, 0, ",", " "). " Kč";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nabídka produktů</h1>
    <?php
    //var_dump($_POST);

    echo "<table border=1>";
    echo "<tr> <th>Název</th> <th>Cena</th> <th></th> </tr>";
    foreach ($produkty as $kodProduktu => $infoOProduktu)
    {
        echo "<tr>
            <td>{$infoOProduktu["nazev"]}</td>
            <td>". cenaProduktu($infoOProduktu["cena"])."</td>
            <td>
                <form method='post'>
                    <button name='pridat' value='$kodProduktu'>+</button>
                </form>
            </td>
            </tr>";
    }
    echo "</table>";
    ?>

    <h1>Obsah košíku</h1>
    <?php
	if(count($_SESSION["kosik"]) > 0)
	{
		echo "<table border=1>";
		$celkovaCena = 0;
		foreach ($_SESSION["kosik"] as $kodProduktu => $mnozstvi)
		{
			echo "<tr>
				<td>$mnozstvi x {$produkty[$kodProduktu]["nazev"]}</td>
				<td>
					<form method='post'>
						<button name='odebrat' value='$kodProduktu'>-</button>
					</form>
				</td>
				</tr>";

				$cenaProduktu = $produkty[$kodProduktu]["cena"];
				$celkovaCena += $cenaProduktu * $mnozstvi;
		}
		echo "</table>";

		echo cenaProduktu($celkovaCena);

		echo "<form method='post'><button name='vysypat'>vysypat košík</button></form>";
	}
	else
	{
		echo "Košík je prázdný";
	}

    ?>
</body>
</html>
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
    $cislo = 1;
    while ($cislo <= 10)
    {
        echo "$cislo <br>";
        $cislo++;
    }

    for ($cislo = 1; $cislo <= 10; $cislo++)
    {
        echo "$cislo <br>";
    }


	//úkol
	for($nadpis = 1; $nadpis <= 6; $nadpis++){
		echo "<h$nadpis>h$nadpis</$nadpis>";
	}

	echo "<table border=1>";
	echo "<tr><th>Celsius</th><th>Farheit</th></tr>";
	for($celsius = -100; $celsius <= 100; $celsius = $celsius + 10){
        $farheit = ($celsius*1.8)+32;

        if($celsius == 0){
            $barva = 'nula';
        }
        if($celsius <= -1){
            $barva = 'minus';
        }
        if($celsius >= 1){
            $barva = 'plus';
        }

        if($farheit == 0){
            $barvaF = 'nula';
        }
        if($farheit <= -1){
            $barvaF = 'minus';
        }
        if($farheit >= 1){
            $barvaF = 'plus';
        }
        echo "<tr><td class=$barva>$celsius</td><td class=$barvaF>$farheit</td></tr>";
	}
	echo "</table>";


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
<style>
    .minus{
        background-color: blue;
    }
    .nula{
        background-color: green;
    }
    .plus{
        background-color: red;
    }
    .zelena{
        background-color: green;
    }
</style>
</html>
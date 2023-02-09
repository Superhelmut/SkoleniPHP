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
    class Auto
    {
        public $znacka;
        public $rokVyroby;

        function stari()
        {
            $datum = date("Y");
            var_dump($datum);
        }
    }

    $auto1 = new Auto();
    $auto1->znacka = "Tesla";
    $auto1->rokVyroby = 2020;

    $auto2 = new Auto();
    $auto2->znacka = "Range Rover";
    $auto2->rokVyroby = 2019;

    $auta = [$auto1, $auto2];
    var_dump($auta);

    echo "<table border=1>";
    echo "<tr> <th>Značka</th> <th>Rok výroby</th> </tr>";
    foreach ($auta as $auto)
    {
        echo "<tr>
                <td>{$auto->znacka}</td>
                <td>{$auto->rokVyroby}</td>
                <td>{$auto->stari()}</td>

            </tr>";

    }
    echo "</table>";

    ?>
</body>
</html>
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
    class Kasa
    {
        protected $pocetPenez;

        function __construct()
        {
            $this->pocetPenez = 0;
        }

        function vloz($castka)
        {
            $this->pocetPenez += $castka;
        }

        function vyber($castka)
        {
            if ($castka > $this->pocetPenez)
            {
                echo "V kase není dost peněz";
            }
            else
            {
                $this->pocetPenez -= $castka;
            }
        }
    }

    $pokladna = new Kasa();
    var_dump($pokladna);

    // vlozit stovku
    //$pokladna->pocetPenez += 100;
    $pokladna->vloz(100);
    $pokladna->vloz(50);
    var_dump($pokladna);

    // vybrat 2 stovky
    //$pokladna->pocetPenez -= 200;
    $pokladna->vyber(80);
    $pokladna->vyber(500);
    var_dump($pokladna);

    ?>
</body>
</html>
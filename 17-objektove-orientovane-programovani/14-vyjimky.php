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
    class ChybaMaloPenez extends Exception
    {
    }

    class ChybaSpatnaCastka extends Exception
    {
    }


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
            if ($castka <= 0)
            {
                $chyba = new ChybaSpatnaCastka();
                throw $chyba;
            }

            if ($castka > $this->pocetPenez)
            {
                //echo "V kase není dost peněz";
                $chyba = new ChybaMaloPenez();
                throw $chyba;
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
    //$pokladna->vyber(500);
    //var_dump($pokladna);

    try
    {
        $pokladna->vyber(50);
        $pokladna->vyber(-50);
        $pokladna->vyber(500);
    }
    catch (ChybaMaloPenez $chyba)
    {
        echo "V kase není dost peněz";
    }
    catch (Exception $chyba)
    {
        echo "Nepodařilo se vybrat peníze";
        echo $chyba;
    }

    ?>
</body>
</html>
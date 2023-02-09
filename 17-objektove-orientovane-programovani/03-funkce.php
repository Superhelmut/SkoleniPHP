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
    class Produkt
    {
        public $nazev;
        public $cena; // cena bez dph
        public $dph; // procentualni sazba

        function cenaSDPH()
        {
            return $this->cena * (1 + $this->dph / 100);
        }
    }

    $telefon = new Produkt();
    $telefon->nazev = "Samsung";
    $telefon->cena = 10000;
    $telefon->dph = 21;

    echo "Cena telefonu: ";
    //echo $telefon->cena * (1 + $telefon->dph / 100);
    echo $telefon->cenaSDPH();


    ?>
</body>
</html>
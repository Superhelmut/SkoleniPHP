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
        public $cena;

        function __construct($nazev, $cena)
        {
            $this->nazev = $nazev;
            $this->cena = $cena;
        }
    }

    class Televize extends Produkt
    {
        public $uhlopricka;
        public $rozliseni;

        function __construct($nazev, $cena, $uhlopricka, $rozliseni)
        {
            parent::__construct($nazev, $cena);

            $this->uhlopricka = $uhlopricka;
            $this->rozliseni = $rozliseni;
        }
    }

    class Vrtacka extends Produkt
    {
        public $vykon;
    }

    $telka = new Televize("Samsung", 9999, '40"', '4K');
    var_dump($telka);

    $vrtacka = new Vrtacka("Bosh", 2000);
    var_dump($vrtacka);
    ?>
</body>
</html>
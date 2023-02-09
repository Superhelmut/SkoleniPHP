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
    $produkt = [
        "nazev" => "Kamera",
        "cena" => 123,
    ];

    class Produkt
    {
        public $nazev;
        public $cena;
        public $popis;
        public $skladem;
    }

    $pivo = new Produkt();
    $pivo->nazev = "Gambrinus";
    $pivo->cena = 11.9;
    $pivo->popis = "Desítka";
    var_dump($pivo);

    echo "Cena piva: $pivo->cena Kč <br>";

    $televize = new Produkt();
    $televize->nazev = "Samsung";
    $televize->cena = 9999;
    var_dump($televize);
    ?>
</body>
</html>
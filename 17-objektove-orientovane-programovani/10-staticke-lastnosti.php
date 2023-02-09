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
    class Clovek
    {
        static $pocetLidiNaSvete = 0;

        public $jmeno;
        public $vek;

        function __construct()
        {
            self::$pocetLidiNaSvete++;
        }

        static function kolikJeLidiNaSvete()
        {
            return self::$pocetLidiNaSvete;
        }
    }

    $adam = new Clovek();
    $eva = new Clovek();

    echo "Počet lidí na světě: ".Clovek::$pocetLidiNaSvete;
    echo "<br>";
    echo "Počet lidí na světě: ".Clovek::kolikJeLidiNaSvete();
    
    ?>
</body>
</html>
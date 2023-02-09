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
        public $jmeno;
        public $vek;

        function __construct($jmeno)
        {
            echo "Narodil se člověk <br>";
            $this->vek = 0;
            $this->jmeno = $jmeno;
        }
    }

    $adam = new Clovek("Adam");
    var_dump($adam);

    $eva = new Clovek("Eva");
    var_dump($eva);
    ?>
</body>
</html>
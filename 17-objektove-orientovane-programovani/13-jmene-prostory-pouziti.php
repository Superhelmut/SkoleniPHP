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
    require "14-jmenne-prostory.php";

    $plachetnice = new \JmenoKnihovny\Vozidla\Lod();
    var_dump($plachetnice);

    use \JmenoKnihovny\Vozidla\Auto;

    $fabie = new Auto();
    var_dump($fabie);

    $mondeo = new Auto();

    ?>
</body>
</html>
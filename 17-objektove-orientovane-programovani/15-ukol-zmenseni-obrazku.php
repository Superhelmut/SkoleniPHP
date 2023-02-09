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
    require "../vendor/autoload.php";

    $image = new \Gumlet\ImageResize('obrazek.jpg');
    $image->resizeToBestFit(500, 300);
    $image->save('malyObrazek.jpg');
    ?>
</body>
</html>
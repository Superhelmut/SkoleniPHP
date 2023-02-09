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
    $vek = 3;

    if ($vek >= 18)
    {
        // sekce pro dospele
        echo "Jsi dospělý";
    }
    else if ($vek >= 15)
    {
        echo "Jsi mladiství";
    }
    else if ($vek >= 6)
    {
        echo "Jsi školák";
    }
    else
    {
        echo "Nejsi dospělý";
    }
    ?>
</body>
</html>
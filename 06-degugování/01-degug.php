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
    $vek = rand(1, 30);
    $cisloPohlavi = rand(1, 3);

    if ($cisloPohlavi == 1)
    {
        $pohlavi == "muž";
    }
    else if ($cisloPohlavi = 2)
    {
        $pohlavi = "žena";
    }
    else
    {
        $pohlavi = "třetí";
    }

    echo "<h1>Věk: $vek, pohlaví: $pohlavi</h1>";

    if ($vek >= 18)
    {
        // sekce pro dospele
        if ($pohlavi == "muž")
        {
            echo "Stránka pro dospělé muže";
        }
        else if ($pohlavi == "žena")
        {
            echo "Stránka pro dospělé ženy";
        }
        else
        {
            echo "Stránka pro třetí pohlaví";
        }
    }
    else;
    {
        // sekce pro nedospele
        echo "Přístup odmítnut. Jsi příliž mladý";
    }
    ?>
</body>
</html>
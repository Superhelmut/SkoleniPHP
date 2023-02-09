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
    $polozky = scandir(".");
    var_dump($polozky);

    foreach ($polozky as $polozka)
    {
        if ($polozka == "." || $polozka == "..")
        {
            continue;
        }

        if (is_file($polozka))
        {
            echo "<a href='$polozka'>$polozka</a> <br>";
        }
        else if (is_dir($polozka))
        {
            echo "$polozka je adresář <br>";
        }
    }
    ?>
</body>
</html>
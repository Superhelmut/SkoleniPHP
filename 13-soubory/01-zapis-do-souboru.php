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
    file_put_contents("soubor.txt", "ahoj kluci\r\njak se máte");

    file_put_contents("soubor.html", "<h1>Nadpis</h1> <p>odstavec</p>");

    file_put_contents("soubor.log", date("H:i:s")." - test\r\n", FILE_APPEND);

	//výpis ze souboru

	$obsah = file_get_contents("soubor.txt");
    //var_dump($obsah);

    echo str_replace("\r\n", "<br>", $obsah);

    ?>
</body>
</html>
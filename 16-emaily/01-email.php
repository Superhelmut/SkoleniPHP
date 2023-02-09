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
    mb_send_mail(
        "vit@rezac.info",
        "Zkouška odeslání z PHP",
        "Zkouška emailu ".date("H:i:s"),
        ["From" => "Ahoj <vit@rezac.info>"]
    );
    echo "Odesláno";
    ?>
</body>
</html>
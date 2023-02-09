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
    $ok = preg_match("/google/", "google a facebook"); // true
    var_dump($ok);

    $ok = preg_match("/seznam/", "google a facebook"); // false
    var_dump($ok);

    // . (tecka) - zastupuje libovolny znak
    $ok = preg_match("/go.gle/", "goWgle a facebook"); // true
    var_dump($ok);

    $ok = preg_match("/go.gle/", "goWRgle a facebook"); // false
    var_dump($ok);

    // * (hvezdicka) - odpovida libovolnemu poctu vyskytu predchozi
    // polozky
    $ok = preg_match("/go*gle/", "ggle a facebook"); // true
    var_dump($ok);

    $ok = preg_match("/go*gle/", "gooooogle a facebook"); // true
    var_dump($ok);

    $ok = preg_match("/go*gle/", "goPgle a facebook"); // false
    var_dump($ok);

    $ok = preg_match("/go.*gle/", "goLLKJgle a facebook"); // true
    var_dump($ok);

    // + (plus) - vyskyt predchozi polozky alespon 1x
    $ok = preg_match("/go+gle/", "ggle a facebook"); // false
    var_dump($ok);

    $ok = preg_match("/go+gle/", "gooooogle a facebook"); // true
    var_dump($ok);

    // ? (otaznik) - vyskyt predchozi polozky je 1x nebo 0x
    $ok = preg_match("/eth?anol/", "etanol je zly"); // true
    var_dump($ok);

    $ok = preg_match("/eth?anol/", "ethanol je zly"); // true
    var_dump($ok);

    // {} (slozene zavorky) - definovany pocet vyskytu predchozi
    // polozky
    $ok = preg_match("/go{3}gle/", "gooogle a facebook"); // true
    var_dump($ok);

    $ok = preg_match("/go{2,5}gle/", "gooogle a facebook"); // true
    var_dump($ok);

    $ok = preg_match("/go{2,}gle/", "gooogle a facebook"); // true
    var_dump($ok);

    // ^ (striska) - musi to tim regularnim vyrazem zacinat
    $ok = preg_match("/^google/", "google a facebook"); // true
    var_dump($ok);

    $ok = preg_match("/^google/", "spolecnosti google a facebook"); // false
    var_dump($ok);

    // $ (dolar) - musi tim regularnim vyrazem koncit
    $ok = preg_match("/google$/", "facebook a google"); // true
    var_dump($ok);

    $ok = preg_match("/google$/", "google a facebook"); // false
    var_dump($ok);

    $ok = preg_match("/^google$/", "google"); // true
    var_dump($ok);

    // [] (hranate zavorky) - jeden ze zadanych znaku
    $ok = preg_match("/go[9eR@]gle/", "go@gle"); // true
    var_dump($ok);

    $ok = preg_match("/go[9eR@]gle/", "go#gle"); // false
    var_dump($ok);

    $ok = preg_match("/go[a-z0-9@]gle/i", "goIgle"); // true
    var_dump($ok);

    // () (kulate zavorky) - ohranicuji skupinu
    $ok = preg_match("/^ahoj( lidi)+$/", "ahoj"); // false
    var_dump($ok);

    $ok = preg_match("/^ahoj( lidi)+$/", "ahoj lidi lidi lidi"); // true
    var_dump($ok);

    // | (pipe) - logicke nebo
    $ok = preg_match("/(cz)|(com)/", "google.cz"); // true
    var_dump($ok);

    $ok = preg_match("/(cz)|(com)/", "google.eu"); // false
    var_dump($ok);

    // \ (zpetne lomitko) - escapuje nasledujici znak, tak aby
    // specialni znak se nechoval jako specialni, ale jako
    // pismenko
    $ok = preg_match("/.+\\.cz$/", "google.cz"); // true
    var_dump($ok);
    ?>
</body>
</html>
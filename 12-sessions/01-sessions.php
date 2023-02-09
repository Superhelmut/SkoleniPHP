<?php
session_start();

$uzivatel = [
    "Karel" => "1234",
    "Jana" => "9876"
];

$jmeno = null;
$heslo = null;
$prihlaseni = null;


if(array_key_exists("odeslat",$_GET))
{
    $jmeno = $_GET["jmeno"];
    $heslo = $_GET["heslo"];

    $uzivatelExistuje = array_key_exists($jmeno, $uzivatel);

        if($uzivatelExistuje == true && $uzivatel[$jmeno] == $heslo)
        {
            $prihlaseni = true;
            $_SESSION["prihlasenyUzivatel"] = $jmeno;
            header("location: ?");
        }
    

}
if(array_key_exists("odhlasit",$_GET))
    unset($_SESSION["prihlasenyUzivatel"]);
?>
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
        if(array_key_exists("prihlasenyUzivatel",$_SESSION) == false)
        {
            ?>
                
                <form>
                    Jméno:<input type="text" name="jmeno">
                    Heslo: <input type="password" name="heslo">
                    <button name="odeslat">Přihlásit se</button>
                </form>
                
            <?php
        }
        else
        {
            echo "přihlášen";
            
            echo "<form><button name='odhlasit'>Odhlásit se</button></form>";
        }
    ?>


</body>
</html>
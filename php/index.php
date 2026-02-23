<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startseite</title>
</head>


<body>
    <p1><b>PHP-Variablen:</b></p1><br>
    <?php

    //Variablen beginnen mit $, alphanumerisch, case-sensitiv, mit Buchstaben beginnen, ohne Sonderzeichen
    $eineZahl = 0;
    $EINEZahl = "Hallo";
    echo "$eineZahl" . "<br>";
    $eineZahl = 5;


    // Eine Variable oder Datentyp näher untersuchen
    # var_dump($eineZahl);


    // Datentypen: (int, float, string, bool, array, object, null, resource)
    $a = 10;
    $b = 1.45;
    $c = false;
    $d = "Welt!";

    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startseite</title>
</head>


<body>
    <h1>PHP-Operatoren</h1>
    <?php
        $hallo = "Hallo";
        $welt = "Welt";
        
        // Konkatenation
        echo $hallo . " " . $welt . "<br>" . " " . "<br>";

        // Rechenoperatoren
        $a = 5;
        $b = 12;
        $c = 50;
        $d = 3;

        echo "Addition: " . ($a + $b);
        echo "<br>";
        echo "Subtraktion: " . ($a - $b);
        echo "<br>";
        echo "Multiplikation: " . ($a * $b);
        echo "<br>";
        echo "Division: " . ($a / $c);
        echo "<br>";
        echo "Modulo: " . ($c % $a);
        echo "<br>";
        echo ($c * $d);

        //Inkrement und Dekrement (Präfix oder Postfix)
        $a++;
        ++$c;
        $b--;
        --$d;

    ?>

    
</body>
</html>
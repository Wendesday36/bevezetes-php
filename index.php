<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_1</title>
</head>

<body>
    <p>Ezt a HTML írta.</p>

    <?php

    echo '<p>Ezt a PHP írta.</p>';


    $nev1 = 'Kovács';
    $nev2 = 'Gizi';
    $nevEgyben = $nev1 . " " . $nev2;


    echo $nevEgyben;
    echo "<br>";
    echo ($nevEgyben) . "<br>";
    print($nevEgyben);
    echo "<br>";
    print $nevEgyben;
    echo "<br>";


    var_dump($nevEgyben);


    //konstans letrehozasa

    define("GREETING", "Hello you!");
    //konstans kihivasa
    echo GREETING;
    echo "<br>";

    //string kezelés
    $szoveg1 = "Béla mondta:\"Szép nap van!\"";
    echo "<br>" . $szoveg1 . "<br>";

    $szoveg2 = 'Béla mondta:"Szép nap van!"';
    echo "<br>" . $szoveg2;

    $szoveg3 = 'Béla mondta:\'Szép nap van!\'';
    echo "<br>" . $szoveg3;

    $szoveg4 = "Béla mondta:'Szép nap van!'";
    echo "<br>" . $szoveg4;



    $nap = "Hétfő";
    $szoveg5 = "Béla mondta: Szép $nap van !";
    echo "<br>" . $szoveg5;

    $szoveg7 = 'Béla mondta: Szép ' . $nap . ' van';
    echo "<br>" . $szoveg7 . "<br>";
    $hova = "feladatook.php";
    $szoveg = "Feladatok";



    //szamok

    $tort1 = 3.56;
    $tort2 = 3.44;
    echo "<br>A két szám összege: " . $tort1 + $tort2;


    $foo = NULL;

    $tomb0 = array(1, 2, 3, 4, 5);
    $tomb1 = array();
    $tomb2[0] = "Ady Endre";
    $tomb2[1] = "József Attila";
    $tomb3 = ["Milan Kundera", "Hermann Hesse"];
    $tomb3[]="lev Tolszoj";
    $t = array_merge($tomb2, $tomb3);
    echo"<br>";
    print_r($t);


    ?>



</body>

</html>
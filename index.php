<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <?php                                               // PHP je jen to v těhlech závorkách, středník by měl být za každým příkazem
    echo "<h1>Vítejte na mém prvním webu!</h1>";

    
    
    $vtip = "Jdou dva a prostřední upadl!"; //Alt Gr + ů ; při každé proměnné se píše $

    echo "<p>$vtip</p>";
    
    
    
    $jmeno = "Karel";
    $prijmeni = "Gott";

    echo "<p>" . $jmeno . " " . $prijmeni . "</p>";



    $a = 5;
    $b = 10;
    echo "<p>". ($a + $b). "</p>";
    echo "<p>". ($a - $b). "</p>";
    echo "<p>". ($a / $b). "</p>";
    echo "<p>". ($a * $b). "</p>";
    echo "<p>". ($a % $b). "</p>"; // děleno a zbytek
    echo "<p>". ($a ** $b). "</p>"; // a na b 
   

//1

    $jmeno = "xx";

    if ($jmeno == "Karel") {
        echo "<p>" .$jmeno . "</p>";
    };

    $barva = "červená";

    if($barva == "černá") {
        echo "Kočka je černá";
    } else {
        echo "kočka není černá";
    }


    $x = 3;

    $y = 4;

    if ($x > $y) {
        echo "x je větší";
    } elseif ($x < $y) {
        echo "y je větší"  ;
    } else { 
        echo 
    }

 ?>

</body>

</html>
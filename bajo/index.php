<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURSO PHP</title>
</head>
<body>
    <?php

        include "segundo.php"; //include mas flexible que require
        $nombre = "Jazziel";
        $edad = 18;

        print "El nombre del usuario es: $nombre <br>";

        echo "El nombre esSS " . $nombre . "y tiene " . $edad . "<br>";

        echo $nombre,$edad . "<br>"; //print no funciona

        
        dameDatos();

        
        
    ?>
</body>
</html>
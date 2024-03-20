<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .resaltar{
        color:#F00;
        font-weight: bold;
    }
</style>
<body>
    <?php
    echo "<p class='resaltar'>Esto es un ejemplo</p>";
    echo '<p class="resaltar">Esto es un ejemplo 2</p>';
    echo "<p class=\"resaltar\">Esto es un ejemplo 3</p>";

    $nombre = "jazz";

    echo "hola $nombre <br>"; //con comillas simple lo toma literal todo

    $variable1 = "Casa";
    $variable2 = "CASA";
    $resultado =strcmp($variable1,$variable2); //devuelve 1 si no son iguales, 0 si son iguales
    echo "El resultado es " . $resultado . "<br>";
    if($resultado){
        echo "El resultado no coiciden <br>";
    }else{
        echo "El resultado si coiciden <br>";
    }
    $resultado =strcasecmp($variable1,$variable2); //devuelve 1 si no son iguales, 0 si son iguales
    echo "El resultado es " . $resultado . "<br>";
    //aqui ignoran las mayus

    if(!$resultado){
        echo "El resultado si coiciden <br>";
    }else{
        echo "El resultado no coiciden <br>";
    }

    ?>
</body>
</html>
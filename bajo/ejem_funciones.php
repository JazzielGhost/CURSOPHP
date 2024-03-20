<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //funciones
    $palabra="JUAN";
    echo (strtolower($palabra));
    echo "<br>";
    echo (strtoupper($palabra));
    function suma($num1, $num2){
        $resultado = $num1 + $num2;
        return $resultado;
    }
    echo "<br>";
    echo suma(10,20);
    echo "<br> <br>";
    function frase_mayuscula($frase,$conversion=true){
        $frase=strtolower($frase);
        if($conversion){
            $resultado=ucwords($frase);
            //la primera leta a mayuscula
        }else{
            $resultado=strtoupper($frase);
        }
        return $resultado;
    }
    echo frase_mayuscula("hola mundo");
    
    echo "<br> <br>";

    function incrementa(&$num){
        $num++;
        return $num;
    }
    $numero = 5;
    echo incrementa($numero) . "<br>";
    echo $numero;

    echo "<br> <br>";

    function cambia_mayus(&$param){
        $param=strtolower($param);
        $param=ucwords($param);
        return $param;
    }

    $cadena = "hOlA muNdo";
    echo cambia_mayus($cadena). "<br>";

    echo $cadena;

    ?>
</body>
</html>
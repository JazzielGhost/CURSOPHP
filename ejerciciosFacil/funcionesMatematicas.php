<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones Matematicas</title>
</head>
<body>
    <?php
        $num1=rand(1,10);
        echo "el numero es: " . $num1;
        echo "<br>";
        $num2 = pow(5,3);
        echo "el numero es: " . $num2;
        echo "<br>";
        $num3 = 5.2545545;
        echo "el numero es: " . round($num3,2);
        echo "<br>";
        $num4 = "5";
        $resultado = 2;
        $resultado += (int)$num4;
        echo "el numero es: " . $resultado;
        
        
    ?>
</body>
</html>
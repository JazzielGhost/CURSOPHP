<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $var1 = true;
    $var2 = false;

    $resultado=$var1 && $var2; //almacenar el resultado false

    if($resultado==true){
        echo "correcto";
    }else{
        echo "incorrecto";
    }
    
    ?>
</body>
</html>
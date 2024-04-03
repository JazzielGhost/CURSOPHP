<?php
    require "devuelve_productos.php";
    $productos = new DevuelveProductos();
    $array_productos = $productos->get_productos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        foreach($array_productos as $elemento){
            echo "<table><tr><td>";
            echo $elemento['codigo_articulo'] . "</td><td>";
            echo $elemento['nombre_articulo'] . "</td><td>";
            echo $elemento['seccion'] . "</td><td>";
            echo $elemento['precio'] . "</td><td>";
            echo $elemento['fecha'] . "</td><td>";
            echo $elemento['importado'] . "</td><td>";
            echo $elemento['pais_origen'] . "</td></tr></table>";
            echo "<br>";
        }
    ?>


</body>
</html>
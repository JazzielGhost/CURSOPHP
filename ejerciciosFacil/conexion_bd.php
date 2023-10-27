<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $db_host="localhost";
    $db_user="root";
    $db_pass="jaziel1218*[=}*";
    $db_name="CURSO_PHP_MYSQL";

    $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


    $consulta = "SELECT * FROM USERS";
    $resultados = mysqli_query($conexion, $consulta);
    
    $fila = mysqli_fetch_row($resultados);

    echo $fila[0] . " ";
    
    echo $fila[1] . " ";

    echo $fila[2] . " ";

    echo $fila[3] . " ";
    
    



    ?>
</body>
</html>
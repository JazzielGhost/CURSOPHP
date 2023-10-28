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

    $conexion = mysqli_connect($db_host, $db_user, $db_pass);

    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la base de datos";
        exit(); 
    }

    mysqli_select_db($conexion, $db_name) or die ("No se encuentra la base de datos");

    //mysqli_set_charset($conexion, "utf8");

    $consulta = "SELECT * FROM USERS";
    $resultados = mysqli_query($conexion, $consulta);

    while($fila = mysqli_fetch_row($resultados)){

        echo $fila[0] . " ";
        
        echo $fila[1] . " ";
    
        echo $fila[2] . " ";
    
        echo $fila[3] . " ";
        
        echo "<br>";
    }

    mysqli_close($conexion);

    ?>
</body>
</html>
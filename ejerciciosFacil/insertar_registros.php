<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //$busqueda = $_GET['buscar'];

        require ("datos_conexion.php");

        $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

        if (mysqli_connect_errno()) {
            echo "Fallo al conectar con la BBDD";
            exit();
        }

        mysqli_select_db($conexion, $db_name) or die("No se encuentra la BBDD");

        mysqli_set_charset($conexion, "utf8");

        $consulta = "INSERT INTO USERS (nombre, apellido, email) VALUES('jazziel', 'gomez', 'ja@gmail.com')";

        $resultados = mysqli_query($conexion, $consulta);
    
        mysqli_close($conexion);
    
    ?>
</body>
</html>
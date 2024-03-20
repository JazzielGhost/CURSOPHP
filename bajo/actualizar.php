<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border:1px solid #F00;
        padding:20px 50px;
        margin-top:50px;
    }
</style>
<body>
    <?php

        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $email = $_GET['email'];

        require ("datos_conexion.php");

        $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

        if (mysqli_connect_errno()) {
            echo "Fallo al conectar con la BBDD";
            exit();
        }

        mysqli_select_db($conexion, $db_name) or die("No se encuentra la BBDD");

        mysqli_set_charset($conexion, "utf8");

        $consulta = "UPDATE USERS SET nombre='$nombre', apellido='$apellido', email='$email' WHERE email='$email'";

        $resultados = mysqli_query($conexion, $consulta);

        if ($resultados == false) {
            echo "Error en la consulta";
        } else {
            echo "Registro guardado<br><br>";
            echo "<table><tr><td>$nombre</td></tr>";
            echo "<tr><td>$apellido</td></tr>";
            echo "<tr><td>$email</td></tr></table>";
        }

        mysqli_close($conexion);

    ?>
</body>
</html>
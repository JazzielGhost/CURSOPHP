<?php
    require 'datos_conexion.php';

    $conexion = mysqli_connect($db_host, $db_user, $db_pass);

    $usuario = mysqli_real_escape_string($conexion, $_GET['usuario']);
    $password = mysqli_real_escape_string($conexion, $_GET['password']);

    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la BBDD";
        exit();
    }

    mysqli_select_db($conexion, $db_name) or die("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

    $consulta = "DELETE FROM users WHERE nombre = '$usuario' AND password = '$password'";

    echo $consulta . "<br>";

    mysqli_query($conexion, $consulta);

    if(mysqli_affected_rows($conexion) > 0){
        echo "Baja procesada";
    }else{
        echo "No se ha encontrado el usuario";
    }


/*
    if(mysqli_query($conexion, $consulta)){
        
        echo "Baja procesada";

    }
*/
    mysqli_close($conexion);



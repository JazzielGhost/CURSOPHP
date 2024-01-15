<?php
    $db_host="localhost";
    $db_user="root";
    $db_pass="jaziel1218*[=}*";
    $db_name="CURSO_PHP_MYSQL";

    $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la base de datos";
        exit(); 
    }

    mysqli_select_db($conexion, $db_name) or die ("No se encuentra la base de datos");

    //mysqli_set_charset($conexion, "utf8");
?>
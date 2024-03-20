<?php

    $conexion = new mysqli('localhost', 'root', 'jaziel1218*[=}*', 'CURSO_PHP_MYSQL');

    if($conexion->connect_errno){
        echo 'Fallo al conectar a la base de datos: ' . $conexion->connect_error;
    }

    //mysqli_set_charset($conexion, 'utf8');

    $conexion -> set_charset('utf8');

    $sql = 'SELECT * FROM ARTICULOS';

    //$resultados = mysqli_query($conexion, $sql);  // Forma procedimental

    $resultados = $conexion->query($sql);  // Forma orientada a objetos

    if($conexion->errno){
        die($conexion->error);
    }

    //while($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)){  // Forma procedimental
        //fetch_array
    while($fila = $resultados->fetch_assoc()){
        echo $fila['SECCIàN'] . ' ';
        echo $fila['NOMBRE ARTÖCULO'] . ' ';
        echo $fila['FECHA'] . ' ';
        echo $fila['PAÖS DE ORIGEN'] . ' ';
        echo $fila['PRECIO'] . '<br>' . '<br>';
    }

    //mysqli_close($conexion);

    $conexion->close();
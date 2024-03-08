<?php

    $pais = $_GET['buscar'];

    require 'datos_conexion.php';

    $conexion = mysqli_connect($db_host, $db_user, $db_pass);

    if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la BBDD";
        exit();
    }

    mysqli_select_db($conexion, $db_name) or die("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

    $sql = "SELECT SECCIàN, `NOMBRE ARTÖCULO`, FECHA, `PAÖS DE ORIGEN` FROM ARTICULOS WHERE `PAÖS DE ORIGEN` = ?";

    $resultado = mysqli_prepare($conexion, $sql);

    $ok = mysqli_stmt_bind_param($resultado, "s", $pais);

    $ok = mysqli_stmt_execute($resultado);

    if ($ok == false) {
        echo "Error al ejecutar la consulta";
    } else {
        $ok = mysqli_stmt_bind_result($resultado, $seccion, $nombre_articulo, $fecha, $pais);

        echo "Articulos encontrados: <br><br>";

        while (mysqli_stmt_fetch($resultado)) {
            echo $seccion . " " . $nombre_articulo . " " . $fecha . " " . $pais . "<br>";
        }

        mysqli_stmt_close($resultado);
    }
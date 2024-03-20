<?php

    $seccion = $_GET["seccion"];
    $nombre_articulo = $_GET["nombre_articulo"];
    $fecha = $_GET["fecha"];
    $pais = $_GET["pais"];
    $precio = $_GET["precio"];

    require 'datos_conexion.php';

    $conexion = mysqli_connect($db_host, $db_user, $db_pass);

    if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la BBDD";
        exit();
    }

    mysqli_select_db($conexion, $db_name) or die("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

    $sql = "INSERT INTO ARTICULOS (SECCIàN, `NOMBRE ARTÖCULO`, FECHA, `PAÖS DE ORIGEN`, PRECIO) VALUES (?,?,?,?,?)";

    $resultado = mysqli_prepare($conexion, $sql);

    $ok = mysqli_stmt_bind_param($resultado, "ssssi", $seccion, $nombre_articulo, $fecha, $pais, $precio);

    $ok = mysqli_stmt_execute($resultado);

    if ($ok == false) {
        echo "Error al ejecutar la consulta";
    } else {

        echo "Agregado nuevo registro <br><br>";

        echo "Se ha agregado un nuevo registro con los siguientes datos: <br><br>";

        echo "Seccion: " . $seccion . "<br>";
        echo "Nombre articulo: " . $nombre_articulo . "<br>";
        echo "Fecha: " . $fecha . "<br>";
        echo "Pais: " . $pais . "<br>";
        echo "Precio: " . $precio . "<br>";

        mysqli_stmt_close($resultado);
    }
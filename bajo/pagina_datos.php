<?php
    $usuario = $_GET['usuario'];
    $password = $_GET['password'];

    require 'datos_conexion.php';

    $conexion = mysqli_connect($db_host, $db_user, $db_pass);

    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la BBDD";
        exit();
    }

    mysqli_select_db($conexion, $db_name) or die("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

    $consulta = "SELECT * FROM USERS WHERE nombre = '$usuario' AND PASSWORD = '$password'";

    echo $consulta . "<br>";

    $resultados = mysqli_query($conexion, $consulta);

    while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
        echo "Bienvenido " . $usuario . " estos son tus datos <br>";
       
        echo "<table><tr><td>";
        echo $fila['id'] . "</td><td>";
        echo $fila['nombre'] . "</td><td>";
        echo $fila['apellido'] . "</td><td>";
        echo $fila['email'] . "</td><td></tr></table>";
        echo "<br>";
    }

    mysqli_close($conexion);



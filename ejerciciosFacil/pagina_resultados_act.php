<?php

$busqueda = $_GET['buscar'];

require 'datos_conexion.php';

$consulta = "SELECT * FROM USERS where email like '%$busqueda%'";

$resultados = mysqli_query($conexion, $consulta);
if(mysqli_connect_errno()){
    echo "Fallo al conectar con la BBDD";
    exit();
}

while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
    //echo "<table> <tr> <td>";
    
    echo "<form action='actualizar.php' method='get'>";
    
    echo "<input type='text' name='nombre' value='" . $fila['nombre'] . "'> <br>";
    
    echo "<input type='text' name='apellido' value='" . $fila['apellido'] . "'> <br>";

    echo "<input type='text' name='email' value='" . $fila['email'] . "'> <br>";

    echo "<input type='submit' name='enviando' value='actualizar'>";

    echo "</form>";
}

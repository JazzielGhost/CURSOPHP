<?php

$busqueda = $_GET['buscar'];

require 'datos_conexion.php';

$consulta = "SELECT * FROM ARTICULOS where SECCIàN like '%$busqueda%'";

$resultados = mysqli_query($conexion, $consulta);
if(mysqli_connect_errno()){
    echo "Fallo al conectar con la BBDD";
    exit();
}

while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
    echo "<table> <tr> <td>";
    echo "<td>" . $fila['SECCIàN'] . "  </td>";

    echo "<td>" . $fila['FECHA'] . "  </td>";

    echo "<td>" . $fila['NOMBRE ARTÖCULO'] . "  </td>";

    echo "<td>" . $fila['PRECIO'] . "  </td>";

    echo "<td>" . $fila['PAÖS DE ORIGEN'] . "  </td>  </tr> </table>";

    echo "<br>";
    echo "<br>";
}

?>
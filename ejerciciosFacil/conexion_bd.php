<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        width:50%;
        border: 1px solid black;
        margin: auto;
    }
</style>
<body>
    <?php

    require 'datos_conexion.php';

    $consulta = "SELECT * FROM ARTICULOS where SECCIàN = 'DEPORTE'";
/*  mysqli_fetch_row = array indexado
    $resultados = mysqli_query($conexion, $consulta);
    while($fila = mysqli_fetch_row($resultados)){
        echo "<table> <tr> <td>";
            echo "<td>" . $fila[0] . "  </td>";
            
            echo "<td>" . $fila[1] . "  </td>";
        
            echo "<td>" . $fila[2] . "  </td>";
        
            echo "<td>" . $fila[3] . "  </td>";

            echo "<td>" . $fila[4] . "  </td> </tr> </table>";

        echo "<br>";
        echo "<br>";
    }

    mysqli_close($conexion);
*/

    $resultados = mysqli_query($conexion, $consulta);
    while($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
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
</body>
</html>
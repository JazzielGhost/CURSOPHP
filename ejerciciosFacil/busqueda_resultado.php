<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    function ejecuta_consulta($labusqueda){

        //$busqueda = $_GET['buscar'];

        require 'datos_conexion.php';

        $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

        if (mysqli_connect_errno()) {
            echo "Fallo al conectar con la BBDD";
            exit();
        }

        mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");

        mysqli_set_charset($conexion, "utf8");

        $consulta = "SELECT * FROM ARTICULOS where SECCIàN like '%$labusqueda%'";

        $resultados = mysqli_query($conexion, $consulta);
    
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

        mysqli_close($conexion);
    }
    
    ?>
</head>

<body>

    <?
        $mibusqueda = $_GET["buscar"];
        $mipag = $_SERVER["PHP_SELF"]; //llamar a la misma pagina
        if ($mibusqueda !== NULL) {
            ejecuta_consulta($mibusqueda);
        } else {
            echo ("<form action='" . $mipag . "' method='get'>
            <label>Buscar: <input type='text' name='buscar'></label>
            <input type='submit' name='enviando' value='Dale!'>
            </form>");
        }

    ?>

</body>

</html>
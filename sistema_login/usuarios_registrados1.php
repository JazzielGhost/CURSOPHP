<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios registrados 1</title>
</head>
<style>
    table{
        border: 1px dotted #FF0000;
    }
    td{
        border: 1px dotted #FF0000;
    }
</style>
<body>

    <?php
        session_start();
        if(!isset($_SESSION["usuario"])){
            header("location:login.php");
        }
    
    ?>

    <h1>Bienvenido <?= $_SESSION["usuario"] ?> </h1>
    <?php
        echo "Hola: " . $_SESSION["usuario"] . "<br>";
    ?>

    <p><a href="cierre.php">Cerrar sesion</a></p>

    <p>Esto es informacion para usuarios registrados</p>

    <table>
        <tr>
            <td>Zona de usuarios registrados</td>
        </tr>
        <tr>
            <td><a href="usuarios_registrados2.php">Pagina 1</a></td>
        </tr>
        <tr>
            <td><a href="usuarios_registrados3.php">Pagina 2</a></td>
        </tr>
        <tr>
            <td><a href="usuarios_registrados4.php">Pagina 3</a></td>
        </tr>

    </table>


</body>
</html> 
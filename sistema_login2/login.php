<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<style>
    h1 {
        text-align: center;
    }

    form {
        text-align: center;
        display: grid;
        justify-content: center;
        margin: 2px;
    }

    .tabla1 {
        background-color: #FFC;
        padding: 5px;
        border: #666 5px solid;
        width: 300px;
        height: 100px;
    }

    footer {
        display: grid;
        justify-content: center;
    }

    .tabla2 {
        background-color: #FFC;
        padding: 5px;
        border: #666 5px solid;
        width: 300px;
        height: 200px;
    }
</style>

<body>
    <?php

    if (isset($_POST["enviando"])) {

        try {
            $base = new PDO("mysql:host=localhost:3307; dbname=CURSO_PHP_MYSQL", "root", "ReyjazielGod1218*");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM USERS WHERE NOMBRE = :login AND PASSWORD = :password";

            $resultado = $base->prepare($sql);

            $login = htmlentities(addslashes($_POST["usuario"]));
            $password = htmlentities(addslashes($_POST["contraseña"]));

            $resultado->bindValue(":login", $login);
            $resultado->bindValue(":password", $password);

            $resultado->execute();

            $numero_registro = $resultado->rowCount();

            if ($numero_registro != 0) {
                //echo "<h2>Adelante!!</h2>";
                session_start();
                $_SESSION["usuario"] = $_POST["usuario"];
                //header("location:usuarios_registrados1.php");
            } else {
                //header("location:login.php");
                echo "<h2>Error, Usuario o contraseña incorrectos</h2>";
            }
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    ?>

    <?php 
        if (!isset($_SESSION["usuario"])) {
            include("formulario.html");
        } else {
            echo "Usuario: " . $_SESSION["usuario"];
        }
    ?>

    <h1>Contenido de la web</h1>

    <footer>
        <table class="tabla2">
            <tr>
                <td>
                    <img src="./imagenes/1.jpeg" alt="">
                </td>
                <td>
                    <img src="./imagenes/2.jpeg" alt="">
                </td>
            </tr>
            <tr>
                <td>
                    <img src="./imagenes/3.jpeg" alt="">
                </td>
                <td>
                    <img src="./imagenes/4.jpeg" alt="">
                </td>
            </tr>
        </table>
    </footer>

</body>

</html>
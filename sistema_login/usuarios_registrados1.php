<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios registrados</title>
</head>
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
    <p>Esto es informacion para usuarios registrados</p>
</body>
</html>
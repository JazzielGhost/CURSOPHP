<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASS</title>
</head>
<body>
    
    <?php


    try{
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

        if($numero_registro != 0){
            echo "<h2>Adelante!!</h2>";
        }else{
            header("location:login.php");
        }

    }catch(Exception $e){
        die('Error: ' . $e->getMessage());
    }



    ?>



</body>
</html>
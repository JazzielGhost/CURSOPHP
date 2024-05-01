<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encriptar</title>
</head>

<body>
    <?php
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        $pass_cifrado = password_hash($password, PASSWORD_DEFAULT, array('cost' => 12));

        try {
            $base = new PDO("mysql:host=localhost:3307; dbname=CURSO_PHP_MYSQL", "root", "ReyjazielGod1218*");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec('SET CHARACTER SET utf8');

            $sql = 'INSERT INTO USUARIOS (usuario, password) VALUES (:usu, :contra)';
            $resultado = $base->prepare($sql);

            $resultado->execute(array(':usu' => $usuario, ':contra' => $pass_cifrado));

            echo 'Registro insertado';

            $resultado->closeCursor();
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        } finally {
            $base = null;
        }
   

    ?>
</body>

</html>
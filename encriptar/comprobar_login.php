<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comprobar login</title>
</head>
<body>
    <?php
    
    try {

        $login = htmlentities(addslashes($_POST['usuario']));
        $password = htmlentities(addslashes($_POST['password']));
        
        $contador = 0;
        
        $base = new PDO("mysql:host=localhost:3307; dbname=CURSO_PHP_MYSQL", "root", "ReyjazielGod1218*");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec('SET CHARACTER SET utf8');

        $sql = 'SELECT * FROM USUARIOS WHERE usuario = :login';

        $resultado = $base->prepare($sql);

        $resultado->execute(array(':login' => $login));

        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
            //echo 'Usuario: ' . $registro['usuario'] . ' Contraseña: ' . $registro['password'] . '<br>';
            if (password_verify($password, $registro['password'])) {
                $contador++;
            }
        }

        if ($contador > 0) {
            echo 'Usuario registrado';
        } else {
            echo 'Usuario no registrado';
        }

        $resultado->closeCursor();

    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    } finally {
        $base = null;
    }
    
    
    ?>
</body>
</html>
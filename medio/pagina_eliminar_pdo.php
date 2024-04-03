<?php

    $busqueda_email = $_POST['email'];

    try {
        $base = new PDO('mysql:host=localhost:3307;dbname=CURSO_PHP_MYSQL', 'root', 'ReyjazielGod1218*');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $base->exec("SET CHARACTER SET utf8");

        //$sql = "SELECT SECCIàN, `NOMBRE ARTÖCULO`, FECHA, `PAÖS DE ORIGEN` FROM ARTICULOS WHERE `SECCIàN` = :n_seccion AND `PAÖS DE ORIGEN` = :n_porig";
        //$sql = "INSERT INTO USERS (NOMBRE, APELLIDO, EMAIL, PASSWORD) VALUES (:n, :a, :e, :p)"; // <-- marcadores de parámetros
        $sql = "DELETE FROM USERS WHERE EMAIL = :e";

        $resultado = $base->prepare($sql);

        //$resultado -> execute(array(":n_seccion" => $busqueda_sec, ":n_porig" => $busqueda_porig));
        //$resultado -> execute(array(":n" => $busqueda_nombre, ":a" => $busqueda_apellido, ":e" => $busqueda_email, ":p" => $busqueda_password));
        $resultado -> execute(array(":e" => $busqueda_email));

        /*while($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "Sección: " . $registro['SECCIàN'] . " Nombre Artículo: " . $registro['NOMBRE ARTÖCULO'] . " Fecha: " . $registro['FECHA'] . " País de Origen: " . $registro['PAÖS DE ORIGEN'] . "<br>";
        }*/

        echo "Registro eliminado correctamente";

        $resultado->closeCursor();

    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
    finally {
        $base = null;
    }


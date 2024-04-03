<?php

    $busqueda_nombre = $_POST['nombre'];
    $busqueda_apellido = $_POST['apellido'];
    $busqueda_email = $_POST['email'];
    $busqueda_password = $_POST['password'];

    try {
        $base = new PDO('mysql:host=localhost:3307;dbname=CURSO_PHP_MYSQL', 'root', 'ReyjazielGod1218*');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $base->exec("SET CHARACTER SET utf8");

        //$sql = "SELECT SECCIàN, `NOMBRE ARTÖCULO`, FECHA, `PAÖS DE ORIGEN` FROM ARTICULOS WHERE `SECCIàN` = :n_seccion AND `PAÖS DE ORIGEN` = :n_porig";
        $sql = "INSERT INTO USERS (NOMBRE, APELLIDO, EMAIL, PASSWORD) VALUES (:n, :a, :e, :p)"; // <-- marcadores de parámetros


        $resultado = $base->prepare($sql);

        //$resultado -> execute(array(":n_seccion" => $busqueda_sec, ":n_porig" => $busqueda_porig));
        $resultado -> execute(array(":n" => $busqueda_nombre, ":a" => $busqueda_apellido, ":e" => $busqueda_email, ":p" => $busqueda_password));

        /*while($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "Sección: " . $registro['SECCIàN'] . " Nombre Artículo: " . $registro['NOMBRE ARTÖCULO'] . " Fecha: " . $registro['FECHA'] . " País de Origen: " . $registro['PAÖS DE ORIGEN'] . "<br>";
        }*/

        echo "Registro insertado";

        $resultado->closeCursor();

    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
    finally {
        $base = null;
    }


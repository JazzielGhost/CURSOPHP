<?php

    $busqueda_sec = $_GET['seccion'];
    $busqueda_porig = $_GET['p_origen'];

    try {
        $base = new PDO('mysql:host=localhost;dbname=CURSO_PHP_MYSQL', 'root', 'jaziel1218*[=}*');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $base->exec("SET CHARACTER SET utf8");

        $sql = "SELECT SECCIàN, `NOMBRE ARTÖCULO`, FECHA, `PAÖS DE ORIGEN` FROM ARTICULOS WHERE `SECCIàN` = :n_seccion AND `PAÖS DE ORIGEN` = :n_porig";

        $resultado = $base->prepare($sql);

        $resultado -> execute(array(":n_seccion" => $busqueda_sec, ":n_porig" => $busqueda_porig));

        while($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "Sección: " . $registro['SECCIàN'] . " Nombre Artículo: " . $registro['NOMBRE ARTÖCULO'] . " Fecha: " . $registro['FECHA'] . " País de Origen: " . $registro['PAÖS DE ORIGEN'] . "<br>";
        }

        $resultado->closeCursor();

    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
    finally {
        $base = null;
    }


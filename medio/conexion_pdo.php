<?php

    try {
        $base = new PDO('mysql:host=localhost;dbname=CURSO_PHP_MYSQL', 'root', 'jaziel1218*[=}*');
        echo 'Conexión exitosa';
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
    finally {
        $base = null;
    }


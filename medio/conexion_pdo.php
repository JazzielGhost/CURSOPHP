<?php

    try {
        $base = new PDO('mysql:host=localhost:3307;dbname=CURSO_PHP_MYSQL', 'root', 'ReyjazielGod1218*');
        echo 'Conexión exitosa';
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
    finally {
        $base = null;
    }


<?php
    try {
        $base = new PDO("mysql:host=localhost:3307; dbname=CURSO_PHP_MYSQL", "root", "ReyjazielGod1218*");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET UTF8");
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
        echo "Linea del error: " . $e->getLine();
    }
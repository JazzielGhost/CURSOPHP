<?php
    require 'config.php';

    class Conexion{
        protected $conexion_db;

        public function __construct() //constructor
        {
            $this->conexion_db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            if ($this->conexion_db->connect_errno) 
            {
                echo "Fallo al conectar a MySQL: " . $this->conexion_db->connect_error;
                return;
            }
            $this->conexion_db->set_charset(DB_CHARSET); //utf8
        }


    }            

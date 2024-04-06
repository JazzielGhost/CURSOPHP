<?php
    require 'conexion.php';

    class DevuelveProductos extends Conexion{
        
        public function DevuelveProductos(){
            parent::__construct();
        }

        public function get_productos($dato){
            
            
            $sql = "SELECT * FROM artIculos WHERE pais_origen = '" . $dato . "'";
            $sentencia = $this->conexion_db->prepare($sql);
            $sentencia->execute(array());
            $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            return $resultados;

            $this->conexion_db = null;

            /*$resultado = $this->conexion_db->query('SELECT * FROM artIculos WHERE pais_origen="' . $dato . '"');
            $productos = $resultado->fetch_all(MYSQLI_ASSOC);
            return $productos;*/
        }

        
    }
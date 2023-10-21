<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    class Coche{
        public  int $ruedas;
        public string $color;
        public int $motor;
        public function __construct(){//metodo constructor
            $this -> ruedas = 4;
            $this -> color = "";
            $this -> motor = 1600;
        }
        function arrancar(){
            echo "Estoy arrancando <br>";
        }
        function girar(){
            echo "Estoy girando <br>";
        }
        function frenar(){
            echo "Estoy frenando <br>";
        }
        function establece_color($color_coche, $nombre_coche){
            $this -> color = $color_coche;
            echo "El {$nombre_coche} tiene el color {$this -> color} <br>";
        }
    }
/*
    $ferrari = new Coche(); //instancia
    $mazda = new Coche();
    $seat = new Coche();
    
    $ferrari->establece_color("Rojo", "Ferrari");
    $seat->establece_color("Blanco", "Seat");
    //$ferrari -> girar();
    //echo $ferrari -> ruedas;
    */
    class Camion extends Coche{
        public function __construct(){//metodo constructor
            $this -> ruedas = 8;
            $this -> color = "Gris";
            $this -> motor = 2600;
        }
        function establece_color($color_camion, $nombre_camion){
            $this -> color = $color_camion;
            echo "El {$nombre_camion} tiene el color {$this -> color} <br>";
        }
        function arrancar(){
            parent::arrancar();
            echo "El camion arranca <br>";
        }
    }

?>
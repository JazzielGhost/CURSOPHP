<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
            echo "El coche arranca <br>";
        }
        function girar(){
            echo "El coche gira <br>";
        }
        function frenar(){
            echo "El coche frena <br>";
        }
    }
    
    $ferrari = new Coche(); //instancia
    $mazda = new Coche();
    $seat = new Coche();
    
    $ferrari -> girar();
    
    echo $ferrari -> ruedas;

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
/*
            $semana[]="Lunes";
            $semana[]="Martes";
            $semana[]="Miercoles";
       
        array asociativo
        $datos=array("Nombre"=>"Juan","Apellido"=>"Perez","Edad"=>25);

        $datos="Hola";
        echo $datos["Nombre"];
        if (is_array($datos)) {
            echo "Es un array";
        }else{
            echo "No es un array";
        }

    $datos=array("Nombre"=>"Juan","Apellido"=>"Perez","Edad"=>25);
    foreach($datos as $clave=>$valor){
        echo "A $clave le corresponde $valor <br>";
    }

    $semana[]="Lunes";
    $semana[]="Martes";
    $semana[]="Miercoles";
    for($i=0;$i<count($semana);$i++){
        echo $semana[$i]."<br>";
    }

    $datos=array("Nombre"=>"Juan","Apellido"=>"Perez","Edad"=>25);
    $datos["Sexo"]="Masculino";
    
    foreach($datos as $clave=>$valor){
        echo "A $clave le corresponde $valor <br>";
    }
    
*/
    
    $semana=array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
    //orden alfabeticamente
    sort($semana);
    for($i=0;$i<count($semana);$i++){
        echo $semana[$i]."<br>";
    }

    ?>
</body>
</html>
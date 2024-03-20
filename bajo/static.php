<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STATIC</title>
</head>
<body>
    
<?php
    function incrementarVariable(){
        static $contador=0;
        $contador++;
        echo $contador. "<br>";
    }

    incrementarVariable();
    incrementarVariable();
    incrementarVariable();
    incrementarVariable();

?>


</body>
</html>
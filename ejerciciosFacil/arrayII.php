<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $alimentos = array(
        "fruta" => array("tropical"=>"kiwi",
                        "citrico"=>"mandarina",
                        "otros"=>"manzana"),

        "leche" => array("animal"=>"leche de vaca",
                        "vegetal"=>"leche de soya"),

        "carne" => array("animal"=>"pollo",
                        "vegetal"=>"carne de vaca")     
    );

    //echo $alimentos["carne"]["animal"];
/*    
    foreach($alimentos as $clave_alim=>$alim){
        echo $clave_alim . "<br>";
        foreach($alim as $clave_alim2 => $alim2){
            echo $clave_alim2 . ": " . $alim2 . "<br>";
        }
        echo "<br>";
    }
*/
    echo var_dump($alimentos);
    ?>
</body>
</html>
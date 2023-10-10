<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $i = 0;
        while($i <= 10){
            echo $i;
            echo "<br>";
            $i++;
        }
        echo "<br>"; 
        $i = 0;   
        do {
            echo $i;
            echo "<br>";
            $i++;
        } while ($i <= 10);
        echo "<br>";
        for ($i=0; $i <= 20; $i++) { 
            if ($i == 0) {
                echo "No es valido 8 x $i";
                echo "<br>";
                continue;
            }
            echo "8 x $i " . " = " . $i*8;
            echo "<br>";
            if ($i>9){ 
                echo "se sale del bucle";
                break;
            }
        }
    ?>
</body>
</html>
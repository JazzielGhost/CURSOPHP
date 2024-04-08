<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroy cookie</title>
</head>
<body>
    <?php
        setcookie("prueba", "Esta es la información de nuestra primera cookie", time()-1, 
        "/sesiones&cookies/zona_contenidos/");

    
    
    ?>
</body>
</html>
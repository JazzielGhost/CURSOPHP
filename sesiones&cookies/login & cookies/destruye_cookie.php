<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>destruye cookie</title>
</head>
<body>
    <?php
    setcookie("nombre_usuario", "Jazziel", time()-1);

    echo "Se ha destruido la cookie";

    ?>
</body>
</html>
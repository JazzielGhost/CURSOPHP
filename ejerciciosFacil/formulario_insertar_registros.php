<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<style>

    * {
        margin: 0;
        padding: 0;
    }

    div {
        width: auto;
        border: 1px solid black;
        height: auto;
        padding: 8px;
        background-color: burlywood;
        border-radius: 10px;

    }

    label {
        margin: 5px;
        display: block;
    }

    input {
        margin: 5px;
    }

    main {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        align-items: center;
    }

    body {
        background-color: aliceblue;
    }
    
</style>

<body>

    <main>
        <div>
            <form action="resultados_insertar_registros.php" method="get">
                    <label for="seccion">Seccion:</label>
                    <input type="text" name="seccion" id="seccion">
                    <br>
                    <label for="nombre_articulo">Nombre articulo:</label>
                    <input type="text" name="nombre_articulo" id="nombre_articulo">
                    <br>
                    <label for="fecha">Fecha:</label>
                    <input type="text" name="fecha" id="fecha">
                    <br>
                    <label for="pais">Pais:</label>
                    <input type="text" name="pais" id="pais">
                    <br>
                    <label for="precio">Precio:</label>
                    <input type="number" name="precio" id="precio">
                    <br>
                    <input type="submit" value="Enviar">
            </form>
        </div>
    </main>
    


</body>
</html>
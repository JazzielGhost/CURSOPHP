<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<style>
    h1{
        text-align: center;
    }
    
    form, td {
        text-align: center;
        display: grid;
        justify-content: center;
        margin: 2px;
    }

    

    table{
        background-color: #FFC;
        padding: 5px;
        border: #666 5px solid;
        width: 300px;
        height: 100px;
    }
</style>

<body>
    <h1>Introduce tus datos</h1>
    <form action="comprobar_login.php" method="post">
        <table>
            <tr>
                <td>Usuario:</td>
                <td><input type="text" name="usuario"></td>
            </tr>
            <tr>
                <td>Contraseña:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="enviando" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>
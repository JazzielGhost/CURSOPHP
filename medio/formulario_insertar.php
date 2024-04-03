<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pdo</title>
</head>

    <style>
        table{
            width:300px;
            margin:auto;
            background-color:#FFC;
            border:2px solid #F00;
            padding:5px;
        }
        td{
            text-align:center;
        }
    </style>

<body>
    
    <form action="pagina_insertar_pdo.php" method="post">
    <table>
        <tr>
            <td>
               Nombre:
            </td>
            <td>
               <input type="text" name="nombre">
            </td>
        </tr>
        <tr>
            <td>
               Apellido:
            </td>
            <td>
               <input type="text" name="apellido">
            </td>
        </tr>
        <tr>
            <td>
               Email:
            </td>
            <td>
               <input type="email" name="email">
            </td>
        </tr>
        <tr>
            <td>
               Password:
            </td>
            <td>
               <input type="password" name="password">
            </td>
        <tr>
            <td colspan="2">
               <input type="submit" name="enviando" value="Dale!">
            </td>
        </tr>
    </table>
    </form>

</body>
</html>
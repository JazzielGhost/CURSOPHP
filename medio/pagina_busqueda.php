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
    
    <form action="pagina_busqueda_pdo.php" method="get">
    <table>
        <tr>
            <td>
               Seccion:
            </td>
            <td>
               <input type="text" name="seccion">
            </td>
        </tr>
        <tr>
            <td>
               Pais de origen:
            </td>
            <td>
               <input type="text" name="p_origen">
            </td>
        </tr>
        <tr>
            <td colspan="2">
               <input type="submit" name="enviando" value="Dale!">
            </td>
        </tr>
    </table>
    </form>

</body>
</html>
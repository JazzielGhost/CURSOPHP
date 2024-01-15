<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>

h1{
	text-align:center;
	color:#00F;
	border-bottom:dotted #0000FF;
	width:50%;
	margin:auto;
	
	
}

table{
	border:1px solid #F00;
	padding:20px 50px;
	margin-top:50px;
}

body{
	background-color:#FFC;
}


</style>
</head>

<body>
<h1>Registro de Usuarios</h1>
<form name="form1" method="get" action="insertar_registro.php">
  <table border="0" align="center">
    <tr>
      <td>Nombre(s)</td>
      <td><label for="name"></label>
      <input type="text" name="name" id="name"></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td><label for="apellido"></label>
      <input type="text" name="apellido" id="apellido"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="email"></label>
      <input type="email" name="email" id="email"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
      <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
  </table>
</form>
</body>
</html>
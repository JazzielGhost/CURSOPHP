<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>
<?php
	/*if(isset($_POST["enviando"])){
      $usuario = $_POST["nombre_usuario"];
      $edad = $_POST["edad_usuario"];
      if($usuario=="Juan" && $edad >= 18){
        echo "<p class='validado'> puedes entrar </p>";
      }else{
        echo "<p class='no_validado'>No puedes entrar </p>";

      }
    }
	if(isset($_POST["enviando"])){
		$edad = $_POST["edad_usuario"];
		if($edad <= 18){
			echo "eres menor de edad";
		}else if($edad<=40){
			echo "eres joven";
		}else if($edad<=65){
			echo "eres maduro";
		}else{
			echo "cu&iacute;date";
			
		}
	}
	if(isset($_POST["enviando"])){
		$contra = $_POST["contra"];
		$nombre = $_POST["nombre_usuario"];

		$resultado = $nombre=="Jazziel" && $contra=="1234" ? "Puedes Acceder" : "No puedes acceder";
		echo $resultado;
	}
	if(isset($_POST["enviando"])){
		$nombre = $_POST["nombre_usuario"];
		$contra = $_POST["contra_surario"];
		switch (true):
			case $nombre === "Jazziel" && $contra === "1234":
				echo "usuario autorizado. Hola Jazziel";
				break;
			case $nombre === "Maria" && $contra === "12345":
				echo "usuario autorizado. Hola Maria";
				break;
			case $nombre === "Pedro" && $contra === "123456":
				echo "usuario autorizado. Hola Pedro";
				break;
			default:
				echo "usuario no autorizado...";
		endswitch;
	}*/
	if (isset($_POST["enviando"])) {
		$nombre = $_POST["nombre_usuario"];
		$edad = $_POST["edad_usuario"];
		switch (true) {
			case $edad<=18:
				echo "eres menor de edad";
				break;
			case $edad<=40:
				echo "eres joven";
				break;	
			case $edad<=65:
				echo "eres maduro";
				break;
			default:
				echo "cu&iacute;date";
				break;
		}
	}
  ?>
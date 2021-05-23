
<?php 
	$host = "localhost";
	$usuario = "root";
	$password = "test"; //no hay password
	$db = "cloud";
	$conexion = mysqli_connect($host,$usuario,$password,$db);
	//abrir conexion
	if(!$conexion){
			die("Conexión fallida".mysqli_connect_error()); 
	}
	else{
			//echo ("Conexión establecida<br/>");
	}

 ?>	
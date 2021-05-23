<?php 
include 'funciones.conexion.php';
//Recibir datos y almacenarlos en variables
	$ID = $POST['ID'];
	$nombret = $_POST['nombre'];
	$emailUser = $_POST['email'];
	$numTarjeta = $_POST['numTarjeta'];
	$cvv = $_POST['cvv'];
	$mes = $_POST['mes'];
	$anio = $_POST['anio'];
	$cp = $_POST['cp'];
	
	//insertar valores
	$insertar = "INSERT INTO pagos VALUES ('$ID','$emailUser','$nombret', '$numTarjeta', '$cvv', '$mes', '$anio', '$cp')";
	$resultado = mysqli_query($conexion, $insertar);

	if(!resultado)
	{
		echo 'Error al procesar compra'.mysqli_error();
	} else {
		echo 'Compra aprobada xd';
	}
	mysqli_close($conexion);
?>
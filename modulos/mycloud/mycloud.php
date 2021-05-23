<?php
	$email = $_SESSION['email'];
	$getID = "SELECT id FROM usuarios WHERE email = '$email'";
	$res = mysqli_query($conexion, $getID);
	$idUser = mysqli_fetch_row($res);


	$datos = "SELECT usuarios.nombre, usuarios.apellidos, usuarios.email, suscripciones.fecha_inicio, suscripciones.fecha_fin, planes.nombre
	FROM suscripciones
	INNER JOIN usuarios ON usuarios.id = suscripciones.id_usuario
	INNER JOIN planes ON planes.id_pyp = suscripciones.id_plan
	WHERE suscripciones.id_usuario = $idUser[0]";
	$resultado = mysqli_query($conexion, $datos);
	$datosUsuario = mysqli_fetch_row($resultado);

?>

<section class="container">
	<div class="row">
	<?php if(!isset($_SESSION['email']))
		header('location:index.php');

	?>
<?php
	$formatos   = array('.jpg', '.png', '.gif', '.docx', '.xlsx', '.pdf', '.txt', '.pptx', '.py', '.js', '.css','.java');
	$directorio = 'modulos/mycloud/archivos';

	if (isset($_POST['boton'])){
		$nombreArchivo    = $_FILES['archivo']['name'];
		$nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
		$ext              = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
		if (in_array($ext, $formatos)){
			if (move_uploaded_file($nombreTmpArchivo, "$directorio/$nombreArchivo")){
				echo "Felicitaciones, archivo $nombreArchivo subido exitosamente";
			}else{
				echo 'Ocurrió un error subiendo el archivo, valida los permisos de la carpeta "archivos"';
			}
		}else{
			echo 'Extension Invalida';
		}
	}
?>

	<div class="col-md-10 mt-5">
		<div class="card">
			<div class="card-header">
				MIS ARCHIVOS
			</div>
			<div class="card-block">
				<div class="row">
					<?php
						if ($dir = opendir($directorio)){
							while ($archivo = readdir($dir)) {
								if ($archivo != '.' && $archivo != '..'){
									
									echo '<div class="col-sm-3 col-xs-12">';
										echo "Archivo: <strong>$archivo</strong><br />";
										//echo '<img src="'.$directorio.'/'.$archivo.'/>';
										//echo '<img src="'.$directorio.'/'.$archivo.'"/>';
									echo '</div>';

								}
							}
						}
						
					?>
				</div>
			</div>
		</div>
		<h1>Selecciona tu archivo</h1>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
				<label for="archivo">Archivo</label>
				<input type="file" class="form-control-file" id="archivo" aria-describedby="fileHelp" name="archivo">
				<small id="fileHelp" class="form-text text-muted">Archivos permitidos (.jpg .png .gif .docx .xlsx .txt .pptx .py .js .css .java )</small>
			</div>
			<button type="submit" class="btn btn-primary" name="boton">Subir archivo</button>
		</form>
	</div>
	<div class="col-md-2 mb-5">
	<div class="main-box__login mt-5">
            <h4>Información de Usuario</h4>
			<img src="././activos/img/profile.png" style="width: 120px;" alt="">
			<p>
				<strong>Nombre:</strong> <?php echo $datosUsuario[0]?> </br>
				<strong>Apellido:</strong> <?php echo $datosUsuario[1]?> </br>
				<strong>Email:</strong> <?php echo $datosUsuario[2]?> </br>
				<strong>Suscripción:</strong> <?php echo $datosUsuario[5]?> </br>
				<strong>Fecha de inicio:</strong> <?php echo $datosUsuario[3]?> </br>
				<strong>Fecha de vencimiento:</strong> <?php echo $datosUsuario[4]?> </br>
			</p>
            
</div>
	</div>
	</div>
</section>
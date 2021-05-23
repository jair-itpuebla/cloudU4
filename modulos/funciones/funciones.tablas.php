<?php 
    include 'funciones.conexion.php';

    //mysqli_query($conexion, "CREATE DATABASE test;");
    //echo ("Se ha creado la base de datos cloud <br>");

    mysqli_query($conexion, "DROP TABLE usuarios, cloud_admin, planes, pagos, suscripciones;");	


    $resultado = mysqli_query($conexion,"CREATE TABLE usuarios(
        id INT(8) PRIMARY KEY NOT NULL AUTO_INCREMENT,
        nombre VARCHAR(30) NOT NULL,
        apellidos VARCHAR(50) NOT NULL,
        fecha_nac DATE NOT NULL,
        sexo CHAR NOT NULL,
        email VARCHAR(30) NOT NULL,
        pswd VARCHAR(15) NOT NULL,
        rol enum('U','A') NOT NULL
        );");
    if($resultado)
        echo 'Se creo tabla Usuarios </br>';
    

	 $test = mysqli_query($conexion,"CREATE TABLE pagos(
        id INT(8) PRIMARY KEY NOT NULL AUTO_INCREMENT,
        mailUser VARCHAR(50) NOT NULL,
        nombret VARCHAR(50) NOT NULL,
        numTarjeta VARCHAR(16) NOT NULL,
        cvv VARCHAR(3) NOT NULL,
        mes VARCHAR(2) NOT NULL,
        anio VARCHAR(4) NOT NULL,
	cp VARCHAR(5) NOT NULL);");
    if($test){
		echo 'Tabla Pagos creada correctamente <br>';
	}else { echo 'Erro al crear tabla pagos'.mysqli_error();}

    $resultado = mysqli_query($conexion, "CREATE TABLE planes(
        id_pyp INT(8) PRIMARY KEY NOT NULL AUTO_INCREMENT,
        nombre VARCHAR(12) NOT NULL,
        tamaño VARCHAR(30) NOT NULL,
        usuarios INT(4) NOT NULL,
        acceso VARCHAR(20) NOT NULL,
        cifrado INT(3) NOT NULL,
        compartir INT(4) NOT NULL,
        copseg INT(3) NOT NULL,
        costos INT(4) NOT NULL);");
    if($resultado)
        echo 'Se creo tabla Planes </br>';
    
    
    $resultado = mysqli_query($conexion, "CREATE TABLE suscripciones(
        id INT(8) PRIMARY KEY NOT NULL AUTO_INCREMENT,
        id_usuario INT(8) NOT NULL,
        id_plan INT(8) NOT NULL,
        fecha_inicio DATE NOT NULL,
        fecha_fin DATE NOT NULL,
        FOREIGN KEY(id_usuario) REFERENCES usuarios(id),
        FOREIGN KEY(id_plan) REFERENCES planes(id_pyp)
        );");
    if($resultado)
        echo 'Se creo tabla Suscripciones </br>';

      //Registros de la tabla planes
      $planes = "INSERT INTO planes VALUES (1,'PLUS','3 GB de almacenamiento',100,'Acceso ilimitado',256,10,30,400)"; 
      $resultado = mysqli_query($conexion, $planes);
      $planes = "INSERT INTO planes VALUES (2,'PRO','5 GB de almacenamiento',10,'Acceso ilimitado',256,100,90,700)";
      $resultado = mysqli_query($conexion, $planes);
      $planes = "INSERT INTO planes VALUES (3,'ESTANDAR','1 TB de almacenamiento',100,'Acceso ilimitado',256,1000,200,1500)";
      $resultado = mysqli_query($conexion, $planes);
      $planes = "INSERT INTO planes VALUES (4,'PROFESIONAL','2 TB de almacenamiento',1000,'Acceso ilimitado',256,5000,365,5000)"; 
      $resultado = mysqli_query($conexion, $planes);
      $planes = "INSERT INTO planes VALUES (5,'FREE','1 GB de almacenamiento',1,'Acceso limitado',256,1,0,0)"; 
      $resultado = mysqli_query($conexion, $planes);
  
    
    $insertar_admin = "INSERT INTO usuarios VALUES (1,'Admin','admin','','M','a@admin.com','12345','A')";
    $resultado = mysqli_query($conexion, $insertar_admin);
    //echo $resultado;
    mysqli_close($conexion);
?>


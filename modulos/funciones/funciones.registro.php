<?php 
    include 'funciones.conexion.php';
    
    //Recibir datos y almacenarlos en variables
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fecha_nac = $_POST['fecha_nac'];
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];
    $sexo = $_POST['sexo'];

    // Suscripcion
    $date = date("Y-m-d"); // hoy
    $fin = date('Y-m-d', strtotime($date. "+1 month")); // un mes
    
    //insertar valores
    $insertar = "INSERT INTO usuarios(nombre,apellidos,fecha_nac,email,pswd,sexo) VALUES ('$nombre','$apellidos','$fecha_nac','$email','$pswd','$sexo')";
    $verificar_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email'");

    if(mysqli_num_rows($verificar_email)>0){
        echo '<script> 
        alert ("El correo ya está registrado");
        window.history.go(-1);
        </script>';
        exit;
    }
    else{
        $resultado = mysqli_query($conexion, $insertar);
        if(!$resultado){
            echo "Error al registrarse";
        }else
        {
            echo '<script> 
            alert ("Usuario registrado correctamente");
            location.replace("./?login");
            </script>';
            $cons = "SELECT id FROM usuarios where email = '$email'";
            $resultado = mysqli_query($conexion, $cons);
            $idUser = mysqli_fetch_row($resultado);

            // Insertar suscripcion free al registrarse.
            $susFree = "INSERT INTO suscripciones(id_usuario,id_plan,fecha_inicio,fecha_fin) VALUES($idUser[0],5,'$date','$fin')";
            $cons2 = mysqli_query($conexion, $susFree);
            if(!$cons2)
                echo 'Error'.mysqli_error();
        }
        
    }//Ejecutar consulta

    mysqli_close($conexion);
<?php 

    $email = $_POST['email'];
    $pswd = $_POST['pswd'];
    $_SESSION['email'] = $email;
    //header('location:clouddrive.php');

    include 'funciones.conexion.php';
    $consulta = "SELECT email, pswd, rol FROM usuarios WHERE email='$email' AND pswd='$pswd'";
    $resultado = mysqli_query($conexion,$consulta);
    $filas = mysqli_fetch_row($resultado);
    

    if(isset($filas[0]) == $email && isset($filas[1]) == $pswd)
    {
        if($filas[2] != 'U')
            header("location: ?funciones.panel_admin");
        else
            header("location: ./?mycloud");
    }
    else
    {
        echo 
        "<script>
        alert('El correo electrónico o la password no son válidos');
        window.history.go(-1);
        </script>";
	session_destroy();
    }
    if(!$resultado){
        echo "Error al iniciar sesión";

    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>
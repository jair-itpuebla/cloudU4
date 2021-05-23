<?php 
    include 'funciones.conexion.php';
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fecha_nac = $_POST['fecha_nac'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];
    //actualizar datos
    $actualizar = "UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos',fecha_nac='$fecha_nac',sexo='$sexo',email='$email',pswd='$pswd' WHERE id='$id'";
    $resultado = mysqli_query($conexion,$actualizar);

    if($resultado){
        echo "<script>
        alert('El registro ha sido actualizado exitosamente');
        window.location='?funciones.clientes'</script>";
    }
    else{
        echo "<script>          
        alert('No se pudo actualizar el registro');
        window.history.go(-1);</script>";
    }
?>
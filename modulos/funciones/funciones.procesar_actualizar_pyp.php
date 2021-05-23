<?php 
    include 'funciones.conexion.php';
    $id_pyp = $_POST['id_pyp'];
    $nombre = $_POST['nombre'];
    $tamaño = $_POST['tamaño'];
    $usuarios = $_POST['usuarios'];
    $acceso = $_POST['acceso'];
    $cifrado = $_POST['cifrado'];
    $compartir = $_POST['compartir'];
    $copseg = $_POST['copseg'];
    $costos = $_POST['costos'];
  
   
    //actualizar datos
    $actualizar = "UPDATE planes SET nombre= '$nombre', tamaño='$tamaño', usuarios='$usuarios', acceso = '$acceso', cifrado='$cifrado', compartir='$compartir', copseg='$copseg', costos='$costos' WHERE id_pyp='$id_pyp'";
    $resultado = mysqli_query($conexion,$actualizar);

    if($resultado){
        echo "<script>
        alert('El registro ha sido actualizado exitosamente');
        window.location='?funciones.pyp'</script>";
    }
    else{
        echo "<script>
        alert('No se pudo actualizar el registro');
        window.history.go(-1);</script>";
    }
?>
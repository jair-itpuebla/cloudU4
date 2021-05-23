<?php 
    include 'funciones.conexion.php';
    $id_pyp = $_POST['id_pyp'];
    $eliminar = "DELETE FROM pyp WHERE id_pyp='$id_pyp'";

    $resultado = mysqli_query($conexion, $eliminar);

    if($resultado){
        echo "<script>alert('Registro eliminado');
        window.history.go(-1);
        </script>";
        
    }
        else{
            echo "<script>alert('No se pudo eliminar');
            window.history.go(-1);</script>";
             
        }
    
?>
<?php 
    include 'funciones.conexion.php';
    $id = $_POST['id'];
    $eliminar = "DELETE FROM usuarios WHERE id='$id'";

    $resultado = mysqli_query($conexion, $eliminar);
    echo $resultado;

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
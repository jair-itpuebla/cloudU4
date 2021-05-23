<?php 
    include 'funciones.conexion.php';
    $id_pyp = $_POST["id_pyp"];
    $pyp = "SELECT * FROM planes WHERE id_pyp = '$id_pyp'";
    @$varsesion = $_SESSION['id_admin'];

    if($varsesion == null || $varsesion = ''){
        echo "<script> 
        alert('Sesión finalizada');
        window.history.go(-1);
        </script>";
        die();
    } 

?>

        <div class="login">
            <h2>Bienvenido: <?php echo $_SESSION['email'] ?> </h2><br>
        </div>
        <form class="container-table container-table-edit2" action="?funciones.procesar_actualizar_pyp" method="POST">
            <div class="table_title table_title_edit2">PLANES Y PRECIOS</div>
            <div class="table_header">ID_PYP</div>
            <div class="table_header">Nombre</div>
            <div class="table_header">Tamaño</div>
            <div class="table_header">Usuarios</div>
            <div class="table_header">Acceso</div>
            <div class="table_header">Cifrado</div>
            <div class="table_header">Compartir</div>
            <div class="table_header">Copia_seguridad</div>
            <div class="table_header">Costo</div>

            
            <?php 
                $resultado = mysqli_query($conexion, $pyp);
                while($row=mysqli_fetch_assoc($resultado)){?>
                    <input type="text" class="table_input" value="<?php echo $row["id_pyp"]; ?>" name="id_pyp" readonly>
                    <input type="text" class="table_input" value="<?php echo $row["nombre"]; ?>" name="nombre" >
                    <input type="text" class="table_input" value="<?php echo $row["tamaño"]; ?>" name="tamaño" >
                    <input type="text" class="table_input" value="<?php echo $row["usuarios"]; ?>" name="usuarios" >
                    <input type="text" class="table_input" value="<?php echo $row["acceso"]; ?>" name="acceso" >
                    <input type="text" class="table_input" value="<?php echo $row["cifrado"]; ?>" name="cifrado" >
                    <input type="text" class="table_input" value="<?php echo $row["compartir"]; ?>" name="compartir" >
                    <input type="text" class="table_input" value="<?php echo $row["copseg"]; ?>" name="copseg" >
                    <input type="text" class="table_input" value="<?php echo $row["costos"]; ?>" name="costos" >
                    
                   
                   
            <?php }  mysqli_free_result($resultado);?>
            <input type="submit" value="Actualizar" class="container_submit_actualizar">
        </form>

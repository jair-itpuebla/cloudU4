<?php 
    include 'funciones.conexion.php';
    $id = $_POST['id'];
    $usuarios = "SELECT * FROM usuarios WHERE id = '$id'";
    
?>
        <div class="login">
            <h2>Bienvenido: <?php echo $_SESSION['id_admin'] ?> </h2><br>
        </div>
        <form class="container-table container-table-edit" action="?funciones.procesar_actualizar" method="POST">
            <div class="table_title table_title_edit">Datos de usuario</div>
            <div class="table_header">ID</div>
            <div class="table_header">Nombre</div>
            <div class="table_header">Apellidos</div>
            <div class="table_header">Fecha_nac</div>
            <div class="table_header">Sexo</div>
            <div class="table_header">Email</div>
            <div class="table_header">password</div>
            <?php 
                $resultado = mysqli_query($conexion, $usuarios);
                while($row=mysqli_fetch_assoc($resultado)){?>
                    <input type="text" class="table_input" value="<?php echo $row["id"]; ?>" name="id" readonly>
                    <input type="text" class="table_input" value="<?php echo $row["nombre"]; ?>" name="nombre">
                    <input type="text" class="table_input" value="<?php echo $row["apellidos"]; ?>" name="apellidos">
                    <input type="text" class="table_input" value="<?php echo $row["fecha_nac"]; ?>" name="fecha_nac">
                    <input type="text" class="table_input" value="<?php echo $row["sexo"]; ?>" name="sexo">
                    <input type="text" class="table_input" value="<?php echo $row["email"]; ?>" name="email">
                    <input type="text" class="table_input" value="<?php echo $row["pswd"]; ?>" name="pswd">
                   
                   
            <?php }  mysqli_free_result($resultado);?>
            <input type="submit" value="Actualizar" class="container_submit_actualizar">
        </form>
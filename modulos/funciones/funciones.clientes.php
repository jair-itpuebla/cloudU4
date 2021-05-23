<?php 
    include 'funciones.conexion.php';
    $usuarios = "SELECT * FROM usuarios";
?>

        <div class="login">
            <h2>Bienvenido: <?php echo $_SESSION['email'] ?> </h2><br>
        </div>
        <div>
            <h2>LISTA DE USUARIOS</h2>
        </div>

        <div class="opciones__contenedor">
            <p>Ingresar ID</p>
            <form action="?funciones.actualizar" method="POST">
            <input type="text" name="id">
            <div class="opciones__contenedor--btn">
                <input type="submit" value="Editar" class="container_submit_actualizar">
            </div>
            </form>
        </div>

        <div class="opciones__contenedor">
            <p>Ingresar ID a Eliminar</p>
            <form action="?funciones.procesar_eliminar" method="POST">
            <input type="text" name="id">
            <div class="opciones__contenedor--btn">
                <input type="submit" value="Eliminar" class="container_submit_actualizar">
            </div>
            </form>
        </div>


        <section class="container-table container-table-edit">
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
                    <div class="table_item"> <?php echo $row["id"];?></div> 
                    <div class="table_item"><?php echo $row["nombre"]; ?></div> 
                    <div class="table_item"><?php echo $row["apellidos"]; ?></div>
                    <div class="table_item"><?php echo $row["fecha_nac"]; ?></div>
                    <div class="table_item"><?php echo $row["sexo"]; ?></div>
                    <div class="table_item"><?php echo $row["email"]; ?></div>
                    <div class="table_item"><?php echo $row["pswd"]; ?></div>   
                    
            <?php }  mysqli_free_result($resultado);?>
        </section>
 

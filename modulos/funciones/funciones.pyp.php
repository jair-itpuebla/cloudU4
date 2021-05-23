<?php 
    include 'funciones.conexion.php';
    $pyp = "SELECT * FROM planes";
?>
        <div class="login">
            <h2>Bienvenido: <?php echo $_SESSION['email'] ?> </h2><br>
        </div>
        <div>
            <h2>LISTA DE PLANES Y PRECIOS</h2>
        </div>
    

        <div class="opciones__contenedor">
            <p>Ingresar ID</p>
            <form action="?funciones.actualizar_pyp" method="POST">
                <input type="text" name="id_pyp">
                <div class="opciones__contenedor--btn">
                    <input type="submit" value="Editar" class="container_submit_actualizar">
                </div>
            </form>
        </div>

        <div class="opciones__contenedor">
            <p>Ingresar ID a Eliminar</p>
            <form action="?funciones.procesar_eliminar_pyp" method="POST">
            <input type="text" name="id_pyp">
            <div class="opciones__contenedor--btn">
                <input type="submit" value="Eliminar" class="container_submit_actualizar">
            </div>
            </form>
        </div>

        <section class="container-table2 container-table-edit2">
            <div class="table_title table_title_edit2">PLANES Y PRECIOS</div>
            <div class="table_header">ID_pyp</div>
            <div class="table_header">Nombre</div>
            <div class="table_header">Tamaño</div>
            <div class="table_header">Usuarios</div>
            <div class="table_header">Acceso</div>
            <div class="table_header">Cifrado</div>
            <div class="table_header">Compartir</div>
            <div class="table_header">Copseg</div>
            <div class="table_header">Costos</div>
            

           
            <?php 
                $resultado = mysqli_query($conexion,$pyp);
                while($row=mysqli_fetch_assoc($resultado)){?>
                    <div class="table_item"><?php echo $row["id_pyp"]; ?></div> 
                    <div class="table_item"><?php echo $row["nombre"]; ?></div> 
                    <div class="table_item"><?php echo $row["tamaño"]; ?></div> 
                    <div class="table_item"><?php echo $row["usuarios"]; ?></div>
                    <div class="table_item"><?php echo $row["acceso"]; ?></div>
                    <div class="table_item"><?php echo $row["cifrado"]; ?></div>
                    <div class="table_item"><?php echo $row["compartir"]; ?></div>
                    <div class="table_item"><?php echo $row["copseg"]; ?></div>
                    <div class="table_item"><?php echo $row["costos"]; ?></div>
            <?php }  mysqli_free_result($resultado);?>
        </section>
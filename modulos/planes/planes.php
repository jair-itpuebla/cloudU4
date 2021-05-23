<?php 
    $consulta1 = "SELECT * FROM planes WHERE id_pyp = 1";
    $consulta2 = "SELECT * FROM planes WHERE id_pyp = 2";
    $consulta3 = "SELECT * FROM planes WHERE id_pyp = 3";
    $consulta4 = "SELECT * FROM planes WHERE id_pyp = 4";
    $resultado1 = mysqli_query($conexion, $consulta1);
    $resultado2 = mysqli_query($conexion, $consulta2);
    $resultado3 = mysqli_query($conexion, $consulta3);
    $resultado4 = mysqli_query($conexion, $consulta4);
    $rows1 = mysqli_fetch_row($resultado1);
    $rows2 = mysqli_fetch_row($resultado2);
    $rows3 = mysqli_fetch_row($resultado3);
    $rows4 = mysqli_fetch_row($resultado4);
?>

<section id="planes">
		<div class="sub">
            <h1>Planes Cloud drive</h1>
        </div>
		<h2>Obtén más de 2GB de almacenamiento a un costo accesible</h2>

        <div class="planes__opciones">
            <div class="planes__opciones--box">
                <p>Personal</p>
            </div>

            <div class="planes__opciones--box">
                <p>Empresarial</p>
            </div>
        </div>
        <div class="planes__info">
            <div class="planes__info--seccion">
                <p class="planes__info--seccion--title"><?php echo $rows1[1]?></p>
                <div class="planes__info--seccion--boxes">
                <p><?php echo $rows1[2]?><br><br>$<?php echo $rows1[8]?><br><br>MXN c/mes</p>
                <a href="<?php echo (isset($_SESSION['email']) ? '?pagar.paso2plus' : '?login')?>" class="planes__info--seccion--btn">Comprar</a>
                </div>

                <ul>
                    <li class="check"><?php echo $rows1[3]?> usuario.</li><br>
                    <li class="check"><?php echo $rows1[4]?></li><br>
                    <li class="check">Cifrado AES de <?php echo $rows1[5]?> bits.</li><br>
                    <li class="check">Compartir a <?php echo $rows1[6]?> usuarios a la vez.</li><br>
                    <li class="check">Copia de seguridad de <?php echo $rows1[7]?> días.</li><br>
			    </ul>
            </div>

            <div class="planes__info--seccion">
            <p class="planes__info--seccion--title"><?php echo $rows2[1]?></p>
                <div class="planes__info--seccion--boxes">
                <p><?php echo $rows2[2]?><br><br>$<?php echo $rows2[8]?><br><br>MXN c/mes</p>
                <a href="<?php echo (isset($_SESSION['email']) ? '?pagar.paso2pro' : '?login')?>" class="planes__info--seccion--btn">Comprar</a>
                </div>
                <ul>
                <li class="check"><?php echo $rows2[3]?> usuario.</li><br>
                    <li class="check"><?php echo $rows2[4]?></li><br>
                    <li class="check">Cifrado AES de <?php echo $rows2[5]?> bits.</li><br>
                    <li class="check">Compartir a <?php echo $rows2[6]?> usuarios a la vez.</li><br>
                    <li class="check">Copia de seguridad de <?php echo $rows2[7]?> días.</li><br>
                </ul>
            </div>

            <div class="planes__info--seccion">
            <p class="planes__info--seccion--title"><?php echo $rows3[1]?></p>
                <div class="planes__info--seccion--boxes">
                <p><?php echo $rows3[2]?><br><br>$<?php echo $rows3[8]?><br><br>MXN c/mes</p>
                <a href="<?php echo (isset($_SESSION['email']) ? '?pagar.paso2est' : '?login')?>"  class="planes__info--seccion--btn">Comprar</a>
                </div>
                <ul>
                <li class="check"><?php echo $rows3[3]?> usuario.</li><br>
                    <li class="check"><?php echo $rows3[4]?></li><br>
                    <li class="check">Cifrado AES de <?php echo $rows3[5]?> bits.</li><br>
                    <li class="check">Compartir a <?php echo $rows3[6]?> usuarios a la vez.</li><br>
                    <li class="check">Copia de seguridad de <?php echo $rows3[7]?> días.</li><br>
                </ul>                
            </div>

            <div class="planes__info--seccion">
            <p class="planes__info--seccion--title"><?php echo $rows4[1]?></p>
                <div class="planes__info--seccion--boxes">
                <p><?php echo $rows4[2]?><br><br>$<?php echo $rows4[8]?><br><br>MXN c/mes</p>
                <a href="<?php echo (isset($_SESSION['email']) ? '?pagar.paso2prof' : '?login')?>"  class="planes__info--seccion--btn">Comprar</a>
                </div>
                <ul>
                <li class="check"><?php echo $rows4[3]?> usuario.</li><br>
                    <li class="check"><?php echo $rows4[4]?></li><br>
                    <li class="check">Cifrado AES de <?php echo $rows4[5]?> bits.</li><br>
                    <li class="check">Compartir a <?php echo $rows4[6]?> usuarios a la vez.</li><br>
                    <li class="check">Copia de seguridad de <?php echo $rows4[7]?> días.</li><br>
                </ul>                
            </div>
        </div>

		
</section>
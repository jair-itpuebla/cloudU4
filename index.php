<?php
session_start();
include 'modulos/funciones/funciones.conexion.php';

if (isset($_GET['session_destroy']) && $_GET['session_destroy'] == 'true')
{

    session_destroy();
    header('Location: index.php');
}

$time = explode(' ', microtime());
$start = $time[1] + $time[0];

require_once('libs/initializer.php');


$email = $_SESSION['email'];
$admin = "SELECT rol FROM usuarios WHERE email = '$email'";
$cons = mysqli_query($conexion,$admin);
$res = mysqli_fetch_row($cons);
?>

<!DOCTYPE html>
<html lang="es">
<?php include_once('modulos/estructuras/header.php'); ?>

<body>
	<div class="margin-box">
        <header class="container">
            <div class="row">
                <nav class="nav-content">
                    <div class="nav-content__logo">
                        <img src="./activos/img/logo.png" alt="logo">
                    </div>
                    <ul class="nav-list__desktop">
                        <li> <a href="#"><div id="google_translate_element"></div></a></li>    
                        <li><a href="?soporte">Soporte </a></li>
                        <?php if(empty($_SESSION['email'])){?>
                            <li class="nav-list__desktop-btn1"><a href="?login"> Iniciar Sesión</a></li>
                            <li class="nav-list__desktop-btn2"><a href="?cuenta">Crear Cuenta</a></li>
                        <?php 
                        } else if($row[0] === 'U'){?>
                            <li class="nav-list__desktop-btn2"><?php echo $_SESSION['email']?> </li>
                            <li class="nav-list__desktop-btn2"><a href="index.php?session_destroy=true">Cerrar Sesión</a></li>
                            <li class="nav-list__desktop-btn2"><a href="?mycloud">Mi Panel</a></li>
                            <?php } ?>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="menu">
		<div class="menu_responsivo">
           <div class="icono" id="icono">
                  <span>&#9776;</span>
          </div>
            <div class="enlaces uno" id="enlaces">
              <a href="?home.motd">Inicio</a>
              <a href="?informacion">¿Qué es cloud drive?</a>
              <a href="?planes">Planes y precios</a>
              <a href="?caracteristicas">Características</a>
              <a href="?soporte">Soporte</a>
	      </div>
        </div>
            <a class="menu__item" href="?home.motd">Inicio</a>
            <a class="menu__item" href="?informacion">¿Qué es cloud drive?</a>
            <a class="menu__item" href="?planes">Planes y precios</a>
            <a class="menu__item" href="?caracteristicas">Características</a>
        </div>
	<main>
		<div id="main__header">
			<?php
				include_once($NRM->IncludeModule());
			?>
		</div>
	</main>
	<?php include_once('modulos/estructuras/footer.php'); ?>
</body>

</html>
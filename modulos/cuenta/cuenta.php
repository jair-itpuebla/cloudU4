<section class="registrar">
<div class="login__container--logo" style="">
   <img src="./activos/img/morro.jpg" alt="Morro Chido">
</div>

<div class="main-box__login" style="margin-top: 30px;">
		<br>
		<div id="bi">Registro de cuenta</div>
		<form action="?funciones.registro" method="POST">
			<div id="ini"><input type="text" name="nombre" placeholder="Nombre" size="30px" required></div>
			<div id="cr"><input type="text" name="apellidos" placeholder="Apellidos" size="30px" required></div>
			<div id="fec">Fecha N: <input type="date" name="fecha_nac"  size="30px" max="2003-12-31"></div>
			<div id="co"><input type="text" name="email" placeholder="Correo" size="30px" required></div>
			<div id="con"><input type="password" name="pswd" placeholder="Contraseña" size="30px" required></div>

			
			Sexo:
			<div class="checkbox">

				Hombre<input type="radio" name="sexo" value="h">
				Mujer<input type="radio" name="sexo" value="m">
			</div>

			<!-- <div id="sex"> Sexo: <input type="radio" name="sexo" value="h"> Hombre
				<input type="radio" name="sexo" value="m"> Mujer
			</div> -->
			<nav>
				<input type="submit" value="Crear cuenta" class="login-btn ">
				<a><button type="reset" class="login-btn">Borrar</button></a>
			</nav>
		</form>
	</div>
</section>
	
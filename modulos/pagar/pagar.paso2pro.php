<!--Equipo 2--
JUAN EDUARDO BUENO LOPEZ
ALISON ATLATENCO SOLIS
JAIR ERICK RODRIGUEZ AMBRIZ
 -->
<?php

	$consulta = "SELECT * FROM planes WHERE id_pyp = 2";
	$resultado = mysqli_query($conexion,$consulta);
	if(!$resultado)
	{
		echo 'No se pudo ejecutar la consuta'.mysqli_error();
	}
	$fila = mysqli_fetch_row($resultado);
?>


 <section class="container">
		<div class="row align-items-center">
		<form action="?pagar.finpro" method="POST" class="row g-4 col-sm-5 col-md-6">
				<div class="col-12">
					<label for="inputAddress" class="form-label">Nombre de titular de tarjeta</label>
					<input type="text" name="nombre" class="form-control padding-10" id="inputAddress" placeholder="Nombre de tarjeta" required>
				</div>
				<div class="col-12">
					<label for="inputAddress2" class="form-label">Número de tarjeta</label>
					<input type="text" name="numTarjeta" class="form-control padding-10" id="inputAddress2" placeholder="Número de tarjeta (16 digítos)" required>
				</div>

				<div class="col-12">
					<label for="inputAddress2" class="form-label">CVV</label>
					<input type="text" name="cvv" class="form-control padding-10" id="inputAddress2" placeholder="Código de seguridad (3 dígitos)" required>
				</div>
				<div class="col-6">
				<label for="inputState" class="form-label">Mes</label>
					<select name="mes" id="inputState" class="form-select padding-10">
					<option selected>01</option>
					<option>01</option>
					<option>02</option>
					<option>03</option>
					<option>04</option>
					<option>05</option>
					<option>06</option>
					<option>07</option>
					<option>08</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					</select>
					
				</div>
				<div class="col-6">
				<label for="inputState" class="form-label">Año</label>
					<select name="anio" id="inputState" class="form-select padding-10">
					<option selected>2021</option>
					<option>2021</option>
					<option>2022</option>
					<option>2023</option>
					<option>2024</option>
					<option>2025</option>
					<option>2026</option>
					<option>2027</option>
					<option>2028</option>
					</select>
					
				</div>

				
				<div class="col-md-2">
					<label for="inputZip" class="form-label">Código Postal</label>
					<input type="text" name="cp" class="form-control padding-10" id="inputZip">
				</div>

				<div class="col-12">
				<input type="submit" class="btn btn-primary padding-10" value="Pagar">
				</div>

			</form>


			<div class="col-sm-3 offset-sm-2 col-md-6 offset-md-0">
				<div class="cont-paq">
				<h1 id="Prod">Cloud Drive <?php echo $fila[1]?></h1>
					<p><?php echo $fila[2]?></p>
					<p>Usuarios: <?php echo $fila[3]?></p>
					<p><?php echo $fila[4]?></p>
					<p>Tipo de cifrado: <?php echo $fila[5]?> bits AES</p>
					<p>Compartir a <?php echo $fila[6]?> usuarios</p>
					<p>Tiempo de respaldo: <?php echo $fila[7]?> dias</p>
					<p>Precio: $<?php echo $fila[8]?></p>

					<div class="cont-img">	
			<div id="imagen">
			<figure><img src="./activos/img/tarjeta1.png" alt="mastercad"></figure>
		</div>
		<div id="imagen">
			<figure><img src="./activos/img/tarjeta2.png" alt="visa"></figure>
		</div>
		<div id="imagen">
			<figure><img src="./activos/img/tarjeta3.jpg" alt="american express"></figure>
		</div>
		</div>
				</div>


			</div>
		</div>
	</section>


	<!-- <section>
		<div id="paso1"><p>2. Ingrese los datos de su tarjeta</p></div>
		<div class="datos">
			<ul>
				<li>Número de tarjeta</li>
				<li>Vencimiento</li>
				<li>Código de seguridad</li>
			</ul>
		</div>
		<form action="?pagar.paqest" method="post">
			<p><input type="text" name="numero"placeholder="Número de tarjeta (16 dígitos)"></p>
			<p><input type="text" name="vencimiento"
				placeholder="MM/AA"></p>
			</p>
			<p><input type="text" name="cvv"placeholder="CVV"></p>
			<p><input type="submit" value="Continuar"></p>
		</form>
		<div id="titulo"><p>Bienvenidas las tarjetas</p></div>

	</section> -->

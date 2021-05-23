<?php
   $email = $_SESSION['email'];
   $nombret = $_POST['nombre'];
   $numTar = $_POST['numTarjeta'];
   $cvv = $_POST['cvv'];
   $mes = $_POST['mes'];
   $year = $_POST['anio'];
   $cp = $_POST['cp'];

   $getUser = "SELECT id FROM usuarios WHERE email = '$email'";
    $res = mysqli_query($conexion, $getUser);
    $row = mysqli_fetch_row($res);


    $update = "UPDATE suscripciones SET id_plan = 2 WHERE id_usuario = $row[0]";
    $res2 = mysqli_query($conexion, $update); 

    $insertPago = "INSERT INTO pagos(mailUser,nombret,numTarjeta,cvv,mes,anio,cp) VALUES ('$email','$nombret','$numTar','$cvv','$mes','$year','$cp')";
    $resPago = mysqli_query($conexion, $insertPago); 
?>

<section class="container">
<div class="row justify-content-center">
<div class="main-box__login mt-5">
            <h4>Compra exitosa</h4>
            <img src="././activos/img/check.png" alt="" style="width: 120px;"></br>
            
            <p>
                Cloud Drive Agradece su compra <br>
                Su suscripción se actualizó a Pro
            </p>
</div>
</div>
</section>
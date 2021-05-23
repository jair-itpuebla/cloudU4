<?php 
    //var_dump echo $_FILES["file"]["name"];
    $directorio = "uploads/";

    $archivo = $directorio . basename($_FILES["file"]["name"])
?>
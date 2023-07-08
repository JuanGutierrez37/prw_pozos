<?php
include_once("conexion.php");
session_start();
	$nombre 	= $_POST['npozo'];
    $medida 	= $_POST['medicion'];
    $fecha 	    = $_POST['fecha'];

    $idvja=$_SESSION['id'];

    echo $id.$nombre.$medida.$fecha.$idvja;

    

      
    $query =  "UPDATE pozos SET nombre='$nombre', medida='$medida', fecha='$fecha' WHERE id='$idvja'";
    $rs    = mysqli_query($conn, $query) or die(mysqli_error($conn));

    header("Location: index.php")



?>
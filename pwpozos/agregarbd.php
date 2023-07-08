<?php include_once("conexion.php"); 
    
	$nombre 	= $_POST['npozo'];
    $medicion 	= $_POST['medicion'];
    $fecha 	= $_POST['fecha'];
    
    
    echo $nombre.$medicion.$fecha;
    
    $query = "INSERT INTO pozos(nombre, medida, fecha) VALUES ('$nombre', '$medicion', '$fecha')";
    $rs    = mysqli_query($conn, $query) or die(mysqli_error($conn));
    
header("Location:index.php");
	

?>

<?php
include_once("conexion.php");
 
$id = $_GET['id'];
 
mysqli_query($conn, "DELETE FROM pozos WHERE id=$id");
 
header("Location:index.php");

?>
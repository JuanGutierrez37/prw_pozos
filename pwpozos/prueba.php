<?php
include_once("conexion.php");
//= Query ========================//


$sql="SELECT * from pozos";
$rs    = mysqli_query($conn, $sql) or die(mysqli_error($conn));

//= Closed while ====================//
/*everytime it fetches the row, adds it to array...*/
while($r[]=mysqli_fetch_row($rs));

echo "<pre>";
//= Prints $r as array =================//
print_r ($r);
//=============================//
echo "</pre>";
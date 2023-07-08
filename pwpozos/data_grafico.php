<?php

include_once("conexion.php");




$sql1="SELECT medida FROM pozos";
$result1 = mysqli_query($conn,$sql1) or die(mysqli_error($conn));



$sql2="SELECT fecha FROM pozos";
$result2 = mysqli_query($conn,$sql2) or die(mysqli_error($conn));


$datosmedida = array();
   
while($row = mysqli_fetch_array($result1)) {
   
$datosmedida[] = $row;

   
}


$pp1=array_column($datosmedida,'medida');









$datosfecha = array();
   
while($row = mysqli_fetch_array($result2)) {
   
$datosfecha[] = $row;
   
}
$pp2=array_column($datosfecha,'fecha');










$etiquetas = ["Enero", "Febrero", "Marzo", "Abril"];
$datos = [5000, 1500, 8000, 5102];



$respuesta = [
    "etiquetas" => $pp2,
    "datos" => $pp1,
    
];
echo json_encode($respuesta);




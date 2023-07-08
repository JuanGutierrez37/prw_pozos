<!DOCTYPE html>
<?php
include_once("conexion.php")
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>



<div class="container text-center"><br><br>
<h1>POZOS PETROLEROS</h1>
  <div class="row justify-content-center">
    <div class="col-12"><br><br>
    <a class="btn btn-primary" href="agregar.php" role="button">AÑADIR POZO</a>
    <a class="btn btn-primary" href="grafica.php" role="button">VISTA DE GRAFICA</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Pozo</th>
      <th scope="col">Medicion (psi)</th>
      <th scope="col">Fecha</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
$sql="SELECT * FROM pozos ORDER BY id";
$result = mysqli_query($conn,$sql);

		$numerofila = 0;
        while($mostrar = mysqli_fetch_array($result)) 
		{    $numerofila++;    
            echo "<tr>";
            echo "<td>".$mostrar['id']."</td>";
            echo "<td>".$mostrar['nombre']."</td>";
            echo "<td>".$mostrar['medida']."</td>";    
			echo "<td>".$mostrar['fecha']."</td>";
            

            echo "<td style='width:26%'><a href=\"editar.php?id=$mostrar[id]\">Modificar</a> | <a href=\"eliminar.php?id=$mostrar[id]\" onClick=\"return confirm('¿Estás seguro de eliminar esta medida?')\">Eliminar</a></td>"; 
            }    ?>
  </tbody>
</table>

      
    </div>
  </div>

</div>
















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
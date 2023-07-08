<!DOCTYPE html>
<?php
include_once("conexion.php");

session_start();

$idv = $_GET['id'];

$_SESSION['id']=$idv;

$querybuscar = mysqli_query($conn, "SELECT * FROM pozos WHERE id=$idv");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{
    $id = $mostrar['id'];
    $nombre = $mostrar['nombre'];
    $medicion = $mostrar['medida'];
    $fecha = $mostrar['fecha'];
    
    

    
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>



<div class="container text-center">
  <div class="row justify-content-center">
    <div class="col-6"><br><br>
                <form action="editarbd.php" method="post">
   
                    <div class="mb-3">
                        <label for="idNombre" class="form-label">Nombre del pozo</label>
                        <input type="text" class="form-control" id="idNombre" name="npozo" value="<?php echo $nombre;?>" 
                            placeholder="ej: pozo maracaibo">
                    </div>
                    <div class="mb-3">
                        <label for="idApellido" class="form-label">Medicion (psi)</label>
                        <input type="number" class="form-control" name="medicion" value="<?php echo $medicion;?>" 
                            placeholder="xx psi">
                    </div>
                    <div class="mb-3">
                        <label for="idCorreo" class="form-label">Fecha</label>
                        <input type="datetime-local" class="form-control" name="fecha" value="<?php echo $fecha;?>" 
                            placeholder="dd/mm/aaaa">
                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Editar" class="btn btn-primary">
                        <a class="btn btn-secondary" href="index.php" role="button">Volver</a>
                    </div>
                    
                </form>

      
    </div>
  </div>

</div>















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
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



<div class="container text-center">
  <div class="row justify-content-center">
    <div class="col-6"><br><br>
                <form action="agregarbd.php" method="post">
                    <div class="mb-3">
                        <label for="idNombre" class="form-label">Nombre del pozo</label>
                        <input type="text" class="form-control" id="idNombre" name="npozo"
                            placeholder="ej: pozo maracaibo">
                    </div>
                    <div class="mb-3">
                        <label for="idApellido" class="form-label">Medicion (psi)</label>
                        <input type="number" class="form-control" name="medicion"
                            placeholder="xx psi">
                    </div>
                    <div class="mb-3">
                        <label for="idCorreo" class="form-label">Fecha</label>
                        <input type="datetime-local" class="form-control" name="fecha"
                            placeholder="dd/mm/aaaa">
                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Añadir" class="btn btn-primary">
                        <a class="btn btn-secondary" href="index.php" role="button">Volver</a>
                        
                    </div>
                    
                </form>

      
    </div>
  </div>

</div>















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
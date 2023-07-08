<!DOCTYPE html>
<?php
include_once("conexion.php");





    $query = "SELECT * from pozos"; 
    $rs    = mysqli_query($conn, $query) or die(mysqli_error($conn));



 
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
                <form action="data_grafico.php" method="post">
                    <div class="col-md-5 mb-8"><br><br>
                            <label for="clientes" class="text-right">Lista de Pozos</label><br>
                            <select name="nombre" class="form-control form-control-sm">
                            <option value="">Seleccione el Pozo</option>
                            <?php
                            while ($dataSelect = mysqli_fetch_array($rs)) { ?>
                                <option value="<?php echo $dataSelect["nombre"]; ?>">
                                <?php echo utf8_encode($dataSelect["nombre"]); ?>
                                </option>
                            <?php } ?>
                        </select><br>

                        <div class="mb-3">
                        <input type="submit" value="Graficar" class="btn btn-primary">
                        <a class="btn btn-secondary" href="index.php" role="button">Volver</a>
                        
                        </div>
                        </div> 
                </form>

      
    </div>
  </div>

</div>















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
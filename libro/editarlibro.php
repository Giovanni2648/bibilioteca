<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<h1 class="bg-black p-2 text-white text-center">Editar Libro</h1>
<form class="container" action="../CRUD/editardatosli.php" method="POST">
    <?php
      include ("../conexion.php");
      $sql = "SELECT * FROM libro WHERE id_libro=".$_REQUEST['id'];
      $resultado = $mysqli ->query($sql);

      $row = $resultado ->fetch_assoc();
    ?>

  <div class="mb-3">
    <label class="form-label">ID</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="id_libro" value="<?php echo $row['id_libro']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">TTULO</label>
    <input type="text" class="form-control" name="tituloli" value="<?php echo $row['titulo']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">EDITORIAL</label>
    <input type="text" class="form-control" name="editorialli" value="<?php echo $row['editorial']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">AREA</label>
    <input type="text" class="form-control" name="areali" value="<?php echo $row['area']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">COVER_URL</label>
    <input type="text" class="form-control" name="coverli" value="<?php echo $row['cover_url']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">DIGITAL_URL</label>
    <input type="text" class="form-control" name="digitalli" value="<?php echo $row['digital_url']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">DISPONIBLE FISICO</label>
    <input type="text" class="form-control" name="dispoli" value="<?php echo $row['disponible_fisico']?>">
  </div>

  <div class="text-center">
  <button type="submit" class="btn btn-primary">MODIFICAR</button>
  <a href="http://localhost/biblioteca/indexx.php?id=li#contenido" class="btn btn-danger">CANCELAR</a>
  </div>
 
</form>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
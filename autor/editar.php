<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Autor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<h1 class="bg-black p-2 text-white text-center">Editar Autor</h1>
<form class="container" action="../CRUD/editardatos.php" method="POST">
    <?php
      include ("../conexion.php");
      $sql = "SELECT * FROM autor WHERE id_autor=".$_REQUEST['id'];
      $resultado = $mysqli ->query($sql);

      $row = $resultado ->fetch_assoc();
    ?>

  <div class="mb-3">
    <label class="form-label">ID</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="id_autor" value="<?php echo $row['id_autor']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">NOMBRE Y APELLIDO</label>
    <input type="text" class="form-control" name="nombreau" value="<?php echo $row['nombre']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">NACIONALIDAD</label>
    <input type="text" class="form-control" name="nacionalidadau" value="<?php echo $row['nacionalidad']?>">
  </div>

  <div class="text-center">
  <button type="submit" class="btn btn-primary">MODIFICAR</button>
  <a href="http://localhost/biblioteca/indexx.php?id=au#contenido" class="btn btn-danger">CANCELAR</a>
  </div>
 
</form>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
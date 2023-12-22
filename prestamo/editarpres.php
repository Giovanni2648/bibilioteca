<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Prestamo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<h1 class="bg-black p-2 text-white text-center">Editar Prestamo</h1>
<form class="container" action="../CRUD/editardatospres.php" method="POST">
    <?php
      include ("../conexion.php");
      $sql = "SELECT * FROM prestamo WHERE id_prestamo=".$_REQUEST['id'];
      $resultado = $mysqli ->query($sql);

      $row = $resultado ->fetch_assoc();
    ?>

  <div class="mb-3">
    <label class="form-label">ID</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="id_prestamo" value="<?php echo $row['id_prestamo']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">FECHA DE PRESTAMO</label>
    <input type="date" class="form-control" name="fechapres" value="<?php echo $row['fecha_prestamo']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">FECHA DE DEVOLUCION</label>
    <input type="date" class="form-control" name="devolpres" value="<?php echo $row['fecha_devolucion']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">DEVUELTO</label>
    <input type="text" class="form-control" name="devuelpres" value="<?php echo $row['devuelto']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">USUARIO ID</label>
    <input type="text" class="form-control" name="usuariopres" value="<?php echo $row['usuario_id']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">LIBRO ID</label>
    <input type="text" class="form-control" name="libropres" value="<?php echo $row['libro_id']?>">
  </div>

  <div class="text-center">
  <button type="submit" class="btn btn-primary">MODIFICAR</button>
  <a href="http://localhost/biblioteca/indexx.php?id=pres#contenido" class="btn btn-danger">CANCELAR</a>
  </div>
 
</form>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
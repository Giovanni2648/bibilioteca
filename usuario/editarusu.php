<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<h1 class="bg-black p-2 text-white text-center">Editar Usuario</h1>
<form class="container" action="../CRUD/editardatosusu.php" method="POST">
    <?php
      include ("../conexion.php");
      $sql = "SELECT * FROM usuario WHERE id_usuario=".$_REQUEST['id'];
      $resultado = $mysqli ->query($sql);

      $row = $resultado ->fetch_assoc();
    ?>

  <div class="mb-3">
    <label class="form-label">ID</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="id_usuario" value="<?php echo $row['id_usuario']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">NOMBRE</label>
    <input type="text" class="form-control" name="nombreusu" value="<?php echo $row['nombre']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">PROGRAMA</label>
    <input type="text" class="form-control" name="programausu" value="<?php echo $row['programa']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">FECHA DE NACIMIENTO</label>
    <input type="date" class="form-control" name="fechausu" value="<?php echo $row['fecha_nacimiento']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">CORREO</label>
    <input type="mail" class="form-control" name="correousu" value="<?php echo $row['correo']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">CONTRASEÑA</label>
    <input type="password" class="form-control" name="contrausu" value="<?php echo $row['password']?>">
  </div>

  <div class="text-center">
  <button type="submit" class="btn btn-primary">MODIFICAR</button>
  <a href="http://localhost/biblioteca/indexx.php?id=usu#contenido" class="btn btn-danger">CANCELAR</a>
  </div>
 
</form>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
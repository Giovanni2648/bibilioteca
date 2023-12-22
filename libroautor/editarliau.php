<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Autor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div>

</div class="content">
    <h1 class="bg-black p-2 text-white text-center">Editar Libro Autor</h1>
    <form class="container" action="../CRUD/editardatosliau.php" method="POST">
        <?php
        include ("../conexion.php");
        $sql = "SELECT * FROM libro_autor WHERE id=".$_REQUEST['id'];
        $resultado = $mysqli ->query($sql);

        $row = $resultado ->fetch_assoc();
        ?>

    <div class="mb-3">
        <label class="form-label">ID</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="idliau" value="<?php echo $row['id']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">LIBRO ID</label>
        <input type="text" class="form-control" name="libroliau" value="<?php echo $row['libro_id']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">AUTOR ID</label>
        <input type="text" class="form-control" name="autorliau" value="<?php echo $row['autor_id']?>">
    </div>

    <div class="text-center">
    <button type="submit" class="btn btn-primary">MODIFICAR</button>
    <a href="http://localhost/biblioteca/indexx.php?id=liau#contenido" class="btn btn-danger">CANCELAR</a>
    </div>
    
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
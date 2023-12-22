<?php
if(isset($_POST['enviar'])){
    $idliau = $_POST['id'];
    $libroid = $_POST['libro_id'];
    $autorid = $_POST['autor_id'];
    include ("../conexion.php");
    $insertar = "INSERT INTO autor (id,libro_id,autor_id) VALUES ('$idliiau','$libroid','$autorid')";
    $resultado = mysqli_query($mysqli, $insertar);
    if ($resultado){
        echo "<script language='JavaScript'>
        alert('los datos se almacenaron correctamente');
        </script>";
        header("Location: ../indexx.php?id=liau#contenido");
    }else{
        echo "<script language='JavaScript'>
        alert('ERROR: los datos se almacenaron correctamente');
        </script>";
        header("Location: ../indexx.php?id=agre_liau#contenido");
    }
    mysqli_clase($mysqli);

}else {}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Libro_Autor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="content">
        <h1 class="bg-black p-2 text-white text-center">Agregar Libro_Autor</h1>
        <br>
        <div class="container">
            <form method="POST" action="libroautor/agregarliau.php">
                <div class="mb-3">
                    <label for="id">ID</label>
                    <input class="form-control" name="id" required type="text" id="codigo" placeholder="Escribe el id">
                </div>
                <div class="mb-3">
                    <label for="descrippcion">ID LIBRO</label>
                    <input class="form-control" name="libro_id" required type="text" id="codigo" placeholder="Escribe el id de libro">

                </div>
                <div class="mb-3">
                    <label for="descripcion">ID AUTOR</label>
                    <input class="form-control" name="autor_id" required type="text" id="codigo" placeholder="Escribe la id de autor">

                </div>
                <div class="text-center">
                    <input class="btn btn-success" type="submit" value="Guardar" name="enviar">
                    <a href="../indexx.php" class="btn btn-dark">Regresar</a>
                </div>
            </form>

        </div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
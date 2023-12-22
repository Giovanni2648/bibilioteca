<?php
if(isset($_POST['enviar'])){
    $id = $_POST['id_libro'];
    $titu = $_POST['titulo'];
    $edi = $_POST['editorial'];
    $are = $_POST['area'];
    $cover = $_POST['cover_url'];
    $digital = $_POST['digital_url'];
    $disp = $_POST['disponible_fisico'];

    include ("../conexion.php");
    $insertar = "INSERT INTO libro (id_libro,titulo,editorial,area,cover_url,digital_url,disponible_fisico) VALUES ('$id','$titu','$edi','$are','$cover','$digital','$disp')";
    $resultado = mysqli_query($mysqli, $insertar);
    if ($resultado){
        echo "<script language='JavaScript'>
        alert('los datos se almacenaron correctamente');
        </script>";
        header("Location: ../indexx.php?id=li#contenido");
    }else{
        echo "<script language='JavaScript'>
        alert('ERROR: los datos se almacenaron correctamente');
        </script>";
        header("Location: ../indexx.php?id=agre_li#contenido");
    }
    mysqli_clase($mysqli);

}else {}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Autor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="content">
        <h1 class="bg-black p-2 text-white text-center">Agregar Libro</h1>
        <br>
        <div class="container">
            <form method="POST" action="libro/agregarlibro.php">
                <div class="mb-3">
                    <label for="id">ID DE LIBRO</label>
                    <input class="form-control" name="id_libro" required type="text" id="codigo" placeholder="Escribe el id del libro">
                </div>
                <div class="mb-3">
                    <label for="descrippcion">TITULO</label>
                    <input class="form-control" name="titulo" required type="text" id="codigo" placeholder="Escribe el titulo">
                </div>
                <div class="mb-3">
                    <label for="descripcion">EDITORIAL</label>
                    <input class="form-control" name="editorial" required type="text" id="codigo" placeholder="Escribe la editorial">
                </div>
                <div class="mb-3">
                    <label for="descripcion">AREA</label>
                    <input class="form-control" name="area" required type="text" id="codigo" placeholder="Escribe el area">
                </div>
                <div class="mb-3">
                    <label for="descripcion">COVER URL</label>
                    <input class="form-control" name="cover_url" required type="text" id="codigo" placeholder="Escribe el cover">
                </div>
                <div class="mb-3">
                    <label for="descripcion">DIGITAL URL</label>
                    <input class="form-control" name="digital_url" required type="text" id="codigo" placeholder="Escribe el digital">
                </div>
                <div class="mb-3">
                    <label for="descripcion">DISPONIBLE FISICO</label>
                    <input class="form-control" name="disponible_fisico" required type="text" id="codigo" placeholder="Escribe si esta disponible">
                </div>

                <div class="text-center">
                    <input class="btn btn-success" type="submit" value="Guardar" name="enviar">
                </div>
            </form>

        </div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

<?php
if(isset($_POST['enviar'])){
    $id = $_POST['id_autor'];
    $nom = $_POST['nombre'];
    $nac = $_POST['nacionalidad'];
    include ("../conexion.php");
    $insertar = "INSERT INTO autor (id_autor,nombre,nacionalidad) VALUES ('$id','$nom','$nac')";
    $resultado = mysqli_query($mysqli, $insertar);
    if ($resultado){
        echo "<script language='JavaScript'>
        alert('los datos se almacenaron correctamente');
        </script>";
        header("Location: ../indexx.php?id=au#contenido");
    }else{
        echo "<script language='JavaScript'>
        alert('ERROR: los datos se almacenaron correctamente');
        </script>";
        header("Location: ../indexx.php?id=agre_au#contenido");
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
        <h1 class="bg-black p-2 text-white text-center">Agregar Autor</h1>
        <br>
        <div class="container">
            <form method="POST" action="autor/agregar.php">
                <div class="mb-3">
                    <label for="id">ID</label>
                    <input class="form-control" name="id_autor" required type="text" id="codigo" placeholder="Escribe el id del autor">
                </div>
                <div class="mb-3">
                    <label for="descrippcion">Nombre y Apellido</label>
                    <input class="form-control" name="nombre" required type="text" id="codigo" placeholder="Escribe el Nombre y Apellido">

                </div>
                <div class="mb-3">
                    <label for="descripcion">Nacionalidad</label>
                    <input class="form-control" name="nacionalidad" required type="text" id="codigo" placeholder="Escribe la nacionalidad">

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
<?php
if(isset($_POST['enviar'])){
    $idpres = $_POST['id_prestamo'];
    $fechapres = $_POST['fecha_prestamo'];
    $fechadevop = $_POST['fecha_devolucion'];
    $devueltopres = $_POST['devuelto'];
    $usuarioidpres = $_POST['usuario_id'];
    $libroidpres = $_POST['libro_id'];

    include ("../conexion.php");
    $insertar = "INSERT INTO prestamo (id_prestamo,fecha_prestamo,fecha_devolucion,devuelto,usuario_id,libro_id) VALUES ('$idpres','$fechapres','$fechadevop','$devueltopres','$usuarioidpres','$libroidpres')";
    $resultado = mysqli_query($mysqli, $insertar);
    if ($resultado){
        echo "<script language='JavaScript'>
        alert('los datos se almacenaron correctamente');
        </script>";
        header("Location: ../indexx.php?id=pres#contenido");
    }else{
        echo "<script language='JavaScript'>
        alert('ERROR: los datos se almacenaron correctamente');
        </script>";
        header("Location: ../indexx.php?id=agre_pres#contenido");
    }
    mysqli_clase($mysqli);

}else {}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Prestamo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="content">
        <h1 class="bg-black p-2 text-white text-center">Agregar Prestamo</h1>
        <br>
        <div class="container">
            <form method="POST" action="prestamo/agregarpres.php">
                <div class="mb-3">
                    <label for="id">ID DE PRESTAMO</label>
                    <input class="form-control" name="id_prestamo" required type="text" id="codigo" placeholder="Escribe el id del prestamo">
                </div>
                <div class="mb-3">
                    <label for="descrippcion">FECHA DE PRESTAMO</label>
                    <input class="form-control" name="fecha_prestamo" required type="date" id="codigo" placeholder="Escribe la fecha de prestamo">
                </div>
                <div class="mb-3">
                    <label for="descripcion">FECHA DE DEVOLUCION</label>
                    <input class="form-control" name="fecha_devolucion" required type="date" id="codigo" placeholder="Escribe la fecha de devolucion">
                </div>
                <div class="mb-3">
                    <label for="descripcion">DEVUELTO</label>
                    <input class="form-control" name="devuelto" required type="boolean" id="codigo" placeholder="Escribe si lo devolvio">
                </div>
                <div class="mb-3">
                    <label for="descripcion">USUARIO_ID</label>
                    <input class="form-control" name="usuario_id" required type="text" id="codigo" placeholder="Escribe el id del usuario">
                </div>
                <div class="mb-3">
                    <label for="descripcion">LIBRO_ID</label>
                    <input class="form-control" name="libro_id" required type="text" id="codigo" placeholder="Escribe el id deñ libro">
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
<?php
if(isset($_POST['enviar'])){
    $idusu = $_POST['id_usuario'];
    $nomusu = $_POST['nombre'];
    $progusu = $_POST['programa'];
    $fechausu = $_POST['fecha_nacimiento'];
    $correousu = $_POST['correo'];
    $contrausu = $_POST['password'];

    include ("../conexion.php");
    $insertar = "INSERT INTO usuario (id_usuario,nombre,programa,fecha_nacimiento,correo,password) VALUES ('$idusu','$nomusu','$progusu','$fechausu','$correousu','$contrausu')";
    $resultado = mysqli_query($mysqli, $insertar);
    if ($resultado){
        echo "<script language='JavaScript'>
        alert('los datos se almacenaron correctamente');
        </script>";
        header("Location: ../indexx.php?id=usu#contenido");
    }else{
        echo "<script language='JavaScript'>
        alert('ERROR: los datos se almacenaron correctamente');
        </script>";
        header("Location: ../indexx.php?id=agre_usu#contenido");
    }
    mysqli_clase($mysqli);

}else {}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="content">
        <h1 class="bg-black p-2 text-white text-center">Agregar Usuario</h1>
        <br>
        <div class="container">
            <form method="POST" action="usuario/agregarusu.php">
                <div class="mb-3">
                    <label for="id">ID DE USUARIO</label>
                    <input class="form-control" name="id_usuario" required type="text" id="codigo" placeholder="Escribe el id del usuario">
                </div>
                <div class="mb-3">
                    <label for="descrippcion">NOMBRE</label>
                    <input class="form-control" name="nombre" required type="text" id="codigo" placeholder="Escribe el nombre">
                </div>
                <div class="mb-3">
                    <label for="descripcion">PROGRAMA</label>
                    <input class="form-control" name="programa" required type="text" id="codigo" placeholder="Escribe la programa">
                </div>
                <div class="mb-3">
                    <label for="descripcion">FECHA DE NACIMIENTO</label>
                    <input class="form-control" name="fecha_nacimiento" required type="date" id="codigo" placeholder="Escribe la fecha de nacimiento">
                </div>
                <div class="mb-3">
                    <label for="descripcion">CORREO</label>
                    <input class="form-control" name="correo" required type="email" id="codigo" placeholder="Escribe el e-mail">
                </div>
                <div class="mb-3">
                    <label for="descripcion">PASSWORD</label>
                    <input class="form-control" name="password" required type="password" id="codigo" placeholder="Escribe la contraseña">
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
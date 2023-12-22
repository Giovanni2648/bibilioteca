<div class="content"> 
    <h1>Usuarios</h1>
    <div>
        <a class="btn btn-success" href="indexx.php?id=agre_usu#contenido">Nuevo <i class="fa fa-plus"></i></a>
    </div>
    <br>
    <?php
    include("conexion.php");
    $sql="select * from usuario";
    $resultado=mysqli_query($mysqli,$sql);
    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID DE USUARIO</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">PROGRAMA</th>
                <th scope="col">FECHA DE NACIMIENTO</th>
                <th scope="col">CORREO</th>
                <th scope="col">PASSWORD</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
            while ($filas=mysqli_fetch_assoc($resultado)) {
            ?>
            <tr>
                <td><?php echo $filas['id_usuario'] ?></td>
                <td><?php echo $filas['nombre'] ?></td>
                <td><?php echo $filas['programa'] ?></td>
                <td><?php echo $filas['fecha_nacimiento'] ?></td>
                <td><?php echo $filas['correo'] ?></td>
                <td><?php echo $filas['password'] ?></td>

                <td>
                    <a href="usuario/editarusu.php?id=<?php echo $filas['id_usuario']?>" class="btn btn-warning">Editar</a>
                    <a href="usuario/eliminarusu.php?id=<?php echo $filas['id_usuario']?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            <?php } ?>

        </tbody>

    </table>
    <div class="text-center">
      <a href="indexx.php?id=agre_usu#contenido" class="btn btn-success">Agregar Usuario</a>
    </div>

</div>

<div class="content"> 
    <h1>Autor</h1>
    <div class="container">
            <div class="row align-items-center">    
                <div class="col-4">
                        <a href="CRUD/imprimirau.php" class="btn btn-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16"><path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/><path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1"/></svg>
                        Imprimir</a>  
                </div>
            </div>
        </div>
    <div>
        <a class="btn btn-success" href="indexx.php?id=agre_au#contenido">Nuevo <i class="fa fa-plus"></i></a>
    </div>
    <br>
    <?php
    include("conexion.php");
    $sql="select * from autor";
    $resultado=mysqli_query($mysqli,$sql);
    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">NACIONALIDAD</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
            while ($filas=mysqli_fetch_assoc($resultado)) {
            ?>
            <tr>
                <td><?php echo $filas['id_autor'] ?></td>
                <td><?php echo $filas['nombre'] ?></td>
                <td><?php echo $filas['nacionalidad'] ?></td>
                <td>
                    <a href="autor/editar.php?id=<?php echo $filas['id_autor']?>" class="btn btn-warning">Editar</a>
                    <a href="autor/eliminar.php?id=<?php echo $filas['id_autor']?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            <?php } ?>

        </tbody>

    </table>
    <div class="text-center">
      <a href="indexx.php?id=agre_au#contenido" class="btn btn-success">Agregar Autor</a>
    </div>

</div>
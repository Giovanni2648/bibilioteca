<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Autor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Impresion de Planillas</h1>
      
<form action="imprimirplanillaliau.php" method="POST">
    <?php
        include("../conexion.php");
        $sql="SELECT libro.titulo as libro_t, autor.nombre as autor_n FROM libro_autor
        LEFT JOIN libro ON libro.id_libro = libro_autor.libro_id
        LEFT JOIN autor ON autor.id_autor = libro_autor.autor_id";
        $resultado=mysqli_query($mysqli,$sql);
    ?>
    
        <select name="libro_autor" class="form-control">
         
          <?php 
          
          while($row = mysqli_fetch_assoc($resultado))
          {
            echo '<option value="'.$row['id'].'">'.'Autor: '.$row['autor_n'].' Libro: '.$row['libro_t'].'</option>';

          } 
            ?>
        </select>
        <br>

        <button type="submit" class="btn btn-primary">Imprimir</button>
        <a href="../indexx.html" class="btn btn-dark">Volver</a>
        
        </form> 
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>
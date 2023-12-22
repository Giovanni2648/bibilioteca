<?php
    include("../conexion.php");

    $liauid = $_POST['idliau'];
    $liauLibro = $_POST['libroliau'];
    $liauAutor = $_POST['autorliau'];

    $sql = "UPDATE libro_autor SET libro_id='$liauLibro', autor_id='$liauAutor' WHERE id='$liauid'";

    $resultado = mysqli_query($mysqli, $sql);

    if ($resultado = TRUE){
        header("location:http://localhost/biblioteca/indexx.php?id=liau#contenido");
    }
    else {
        "DATOS NO INSERTADOS";
    }
?>
    
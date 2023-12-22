<?php
    include("../conexion.php");

    $idautor = $_POST['id_autor'];
    $nombrautor = $_POST['nombreau'];
    $nacionalidadautor = $_POST['nacionalidadau'];

    $sql = "UPDATE autor SET nombre='$nombrautor', nacionalidad='$nacionalidadautor' WHERE id_autor='$idautor'";

    $resultado = mysqli_query($mysqli, $sql);

    if ($resultado = TRUE){
        header("location:http://localhost/biblioteca/indexx.php?id=au#contenido");
    }
    else {
        "DATOS NO INSERTADOS";
    }
?>
    
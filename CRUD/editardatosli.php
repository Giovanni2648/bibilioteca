<?php
    include("../conexion.php");

    $idlibro = $_POST['id_libro'];
    $titulolibro = $_POST['tituloli'];
    $editoriallibro = $_POST['editorialli'];
    $arealibro = $_POST['areali'];
    $coverlibro = $_POST['coverli'];
    $digitallibro = $_POST['digitalli'];
    $dispolibro = $_POST['dispoli'];


    $sql = "UPDATE libro SET titulo='$titulolibro', editorial='$editoriallibro', area='$arealibro', cover_url='$coverlibro', digital_url='$digitallibro', disponible_fisico='$dispolibro' WHERE id_libro='$idlibro'";

    $resultado = mysqli_query($mysqli, $sql);

    if ($resultado = TRUE){
        header("location:http://localhost/biblioteca/indexx.php?id=li#contenido");
    }
    else {
        "DATOS NO INSERTADOS";
    }
?>
    
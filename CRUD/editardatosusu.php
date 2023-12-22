<?php
    include("../conexion.php");

    $idusuario = $_POST['id_usuario'];
    $NomUsuario = $_POST['nombreusu'];
    $ProUsuario = $_POST['programausu'];
    $FechaUsuario = $_POST['fechausu'];
    $CorreoUsuario = $_POST['correousu'];
    $ContraUsuario = $_POST['contrausu'];

    $sql = "UPDATE usuario SET nombre='$NomUsuario', programa='$ProUsuario', fecha_nacimiento='$FechaUsuario', correo='$CorreoUsuario', password='$ContraUsuario'  WHERE id_usuario='$idusuario'";

    $resultado = mysqli_query($mysqli, $sql);

    if ($resultado = TRUE){
        header("location:http://localhost/biblioteca/indexx.php?id=usu#contenido");
    }
    else {
        "DATOS NO INSERTADOS";
    }
?>
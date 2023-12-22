<?php
    include("../conexion.php");

    $idprestamo = $_POST['id_prestamo'];
    $PresFecha = $_POST['fechapres'];
    $PresDevo = $_POST['devolpres'];
    $PresDevuelto = $_POST['devuelpres'];
    $PresUsuario = $_POST['usuariopres'];
    $PresLibro = $_POST['libropres'];

    $sql = "UPDATE prestamo SET fecha_prestamo='$PresFecha', fecha_devolucion='$PresDevo', devuelto='$PresDevuelto', usuario_id='$PresUsuario', libro_id='$PresLibro'  WHERE id_prestamo='$idprestamo'";

    $resultado = mysqli_query($mysqli, $sql);

    if ($resultado = TRUE){
        header("location:http://localhost/biblioteca/indexx.php?id=pres#contenido");
    }
    else {
        "DATOS NO INSERTADOS";
    }
?>
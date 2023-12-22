<?php
include ("../conexion.php");
$id = $_GET['id'];
$sql = "DELETE FROM prestamo WHERE id_prestamo ='$id'";
$query = mysqli_query($mysqli,$sql);
if ($query === TRUE) {
    header("Location:http://localhost/biblioteca/indexx.php?id=pres#contenido");
}
?>
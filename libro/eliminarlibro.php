<?php
include ("../conexion.php");
$id = $_GET['id'];
$sql = "DELETE FROM libro WHERE id_libro ='$id'";
$query = mysqli_query($mysqli,$sql);
if ($query === TRUE) {
    header("Location:http://localhost/biblioteca/indexx.php?id=li#contenido");
}
?>
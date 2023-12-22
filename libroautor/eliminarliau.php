<?php
include ("../conexion.php");
$id = $_GET['id'];
$sql = "DELETE FROM libro_autor WHERE id ='$id'";
$query = mysqli_query($mysqli,$sql);
if ($query === TRUE) {
    header("Location:http://localhost/biblioteca/indexx.php?id=liau#contenido");
}
?>
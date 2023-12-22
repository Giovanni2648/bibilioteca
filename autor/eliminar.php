<?php
include ("../conexion.php");
$id = $_GET['id'];
$sql = "DELETE FROM autor WHERE id_autor ='$id'";
$query = mysqli_query($mysqli,$sql);
if ($query === TRUE) {
    header("Location:http://localhost/biblioteca/indexx.php?id=au#contenido");
}
?>



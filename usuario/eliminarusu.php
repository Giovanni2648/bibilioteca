<?php
include ("../conexion.php");
$id = $_GET['id'];
$sql = "DELETE FROM usuario WHERE id_usuario ='$id'";
$query = mysqli_query($mysqli,$sql);
if ($query === TRUE) {
    header("Location:http://localhost/biblioteca/indexx.php?id=usu#contenido");
}
?>
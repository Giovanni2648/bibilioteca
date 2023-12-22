<?php
// Se utiliza para llamar al archivo que contine la conexion a la base de datos
require 'conexion.php';

// Validamos que el formulario y que el boton registro haya sido presionado
if(isset($_POST['registro'])) {

// Obtener los valores enviados por el formulario
$usuario = $_POST['correo'];
$contrasena = $_POST['password'];

// Insertamos los datos en la base de datos
$sql = "INSERT INTO usuario ( id_usuario,correo, password) VALUES ( null,'$usuario', '$contrasena')";
$resultado = mysqli_query($conexion,$sql);
	if($resultado) {
		// Iserción correcta
		header("Location: ../../indexx.php");
	} else {
		// Iserción fallida
		echo "¡No se puede insertar la informacion!"."<br>";
		echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
	}
}
?>

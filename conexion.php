<?php
$mysqli = new mysqli("localhost","phpmyadmin","!Podrida11111010101","biblioteca");

if ($mysqli->connect_error){
    die('error de conexion ' . $mysqli->connect_error);
}
?>
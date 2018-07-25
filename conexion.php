<?php 



$servidor = "localhost";
$usuario = "root";
$pass = "";
$db = "mensajeros";

$conexion = mysqli_connect($servidor, $usuario, $pass, $db)or die("No se pudo conectar");

$select = mysqli_query($conexion, "SELECT * FROM datos")or die("Fallo la consulta");



?>    
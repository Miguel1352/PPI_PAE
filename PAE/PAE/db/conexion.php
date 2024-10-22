<?php
// Conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "PAE"; // solo cambia el nombre de la base de datos


$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);


if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
    }else {echo"Base de datos conectada";}
?>

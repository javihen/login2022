<?php
include('consulta.php');

 $nombre = $_POST['nombre'];
 $edad = $_POST['edad'];
 $raza = $_POST['raza'];


$consulta =$conexion->prepare("INSERT INTO mascota (id, nombre, edad, raza, create_time, update_time, content) VALUES (NULL, '$nombre', '$edad', '$raza', NULL, NULL, NULL) ");
$consulta->execute();

if($consulta)
echo "Se registro";
else
echo "No se registro";

header('location:panelControl.php');
?>
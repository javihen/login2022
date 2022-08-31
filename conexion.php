<?php
$cadena = 'mysql:host=localhost;dbname=BDVeterinaria';
$conexion = new PDO($cadena,'root','');

$email = $_POST['email'];
$clave = $_POST['clave'];



$consulta =$conexion->prepare("select * from usuario where email=:email and clave=:clave");
$consulta->bindParam(':email',$email);
$consulta->bindParam(':clave',$clave);
$consulta->execute();

if($consulta->rowCount()>0){
    header('location:panelControl.php');
}else{
    header('location:index.php');
}

?>

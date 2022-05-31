 <?php

session_start();
include_once 'conexion.php';
$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];
$sentencia=$pdo->prepare('SELECT*FROM login WHERE  usuario =? AND password =?;');

$sentencia->execute([$nombre, $pass]);
$datos=$sentencia->fetch(PDO::FETCH_OBJ);

if($datos === FALSE) {
  header('location: ../../index.php');
}elseif($sentencia->rowCount()==1){
  $_SESSION['usuario']=$datos->usuario;
  header('location: ../../vista/formularios/principal.php');
}

 ?>
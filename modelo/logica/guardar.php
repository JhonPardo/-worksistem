<?php
 require_once 'conexion.php';
  
$id  = $_POST['identificacion'];
$nombre = $_POST['nombre'];
$tele  = $_POST['telefono'];
$direc = $_POST['direccion'];
$email = $_POST['email'];

$insertar = $pdo->prepare('INSERT INTO cliente (id_cliente,nombre_cliente, telefono_cliente, direccion_cliente, correo_cliente)VALUES(:identificacion,:nombre,:telefono,:direccion,:email)');

$insertar->bindParam(':identificacion',$id);
$insertar->bindParam(':nombre',$nombre);
$insertar->bindParam(':telefono',$tele);
$insertar->bindParam(':direccion',$direc);
$insertar->bindParam(':email',$email);

if($insertar->execute()){
   echo "<script> alert('el usuario se guardo correctamente');
   location.href = '../../vista/formularios/formulario_ingreso_cliente.php';
  </script>";

}else{
   echo "<script> alert('No se guardo el USUARIO  ');
   location.href = '../../vista/formularios/formulario_ingreso_cliente.php';
  </script>";
}

?>


<?php
 require_once 'conexion.php';
  
$id  = $_POST['identificacion'];
$nombre = $_POST['nombre'];
$tele  = $_POST['telefono'];
$direc = $_POST['direccion'];
$email = $_POST['email'];


$insertar = $pdo->prepare('INSERT INTO proveedor (id_proveedor,nombre_proveedor, direccion_proveedor, telefono_proveedor, email_proveedor)VALUES(:identificacion,:nombre,:direccion,:telefono,:email)');

$insertar->bindParam(':identificacion',$id);
$insertar->bindParam(':nombre',$nombre);
$insertar->bindParam(':direccion',$direc);
$insertar->bindParam(':telefono',$tele);
$insertar->bindParam(':email',$email);

if($insertar->execute()){
   echo "<script> alert('el proveedor de guardo correctamente');
   location.href = '../../vista/formularios/formulario_ingreso_proveedores.php';
  </script>";

}else{
    echo "<script> alert('No se guardo el Proveedor ');
    location.href = '../../vista/formularios/formulario_ingreso_proveedores.php';
    </script>";
}
   

?>

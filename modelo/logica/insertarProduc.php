<?php
 require_once 'conexion.php';
  
$id  = $_POST['id'];
$idprove= $_POST['id_proveedor'];
$nombre = $_POST['nombre'];
$precio  = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$descrip = $_POST['descripcion'];


$insertar = $pdo->prepare('INSERT INTO producto (id_producto, id_proveedor, nombre_producto, precio_producto, cantidad_producto, descripcion )VALUES(:id,:id_proveedor,:nombre,:precio,:cantidad,:descripcion)');

$insertar->bindParam(':id',$id);
$insertar->bindParam(':id_proveedor',$idprove);
$insertar->bindParam(':nombre',$nombre);
$insertar->bindParam(':precio',$precio);
$insertar->bindParam(':cantidad',$cantidad);
$insertar->bindParam(':descripcion',$descrip);

if($insertar->execute()){
   echo "<script> alert('el Producto de guardo correctamente');
   location.href = '../formulario_ingreso_producto.php';
  </script>";

}else{
    echo "<script> alert('Error No se guardo el Producto ');
    location.href = '../formulario_ingreso_producto.php';  
    </script>";
}
   

?>

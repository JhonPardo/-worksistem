<?php
include("conexion.php");

$id=$_POST["id"];
$nombre=$_POST["nombre"];
$tele=$_POST["telefono"];
$direc=$_POST["direccion"];
$email=$_POST["email"];
//actualizar los datos
$actualizar="UPDATE cliente SET nombre_cliente='$nombre', telefono_cliente='$tele', direccion_cliente='$direc', correo_cliente='$email' WHERE id_cliente='$id'";

$resultado=mysqli_query($conectar,$actualizar);

if($resultado){
	echo "<script languaje=JavaScript'>
	alert('Los datos se actualizaron correctamente ');
	location.assign('../formulario_listado_cliente.php');
	</script>";
	
}else{
	echo "<script languaje=JavaScript'>
	alert(' No se actulizaron los datos');
	location.assign('../formulario_listado_cliente.php');
	</script>";
}

?>
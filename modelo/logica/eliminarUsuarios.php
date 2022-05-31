<?php
   
include_once("conexion.php");
$id=$_GET["id"];



$sql= $pdo->prepare("DELETE FROM cliente WHERE id_cliente=:id");
$sql->bindParam(":id", $id);


if($sql->execute()){
	echo "<script languaje=JavaScript'>
	alert('Los CLIENTE se elimino correctamente de la BD');
	location.assign('../../vista/formularios/formulario_listado_cliente.php?pagina=1');
	</script>";
	
}else{
	echo "<script languaje=JavaScript'>
	alert('Los datos No se eliminaron correctamente de la BD');
	location.assign('../../vista/formularios/formulario_listado_cliente.php?pagina=1');
	</script>";
}


?>

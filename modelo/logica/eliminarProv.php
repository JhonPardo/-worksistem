

<?php
   
   include_once("conexion.php");
   $id=$_GET["id"];
   
   
   
   $sql= $pdo->prepare("DELETE FROM proveedor WHERE id_proveedor=:id");
   $sql->bindParam(":id", $id);
   
   
   if($sql->execute()){
       echo "<script languaje=JavaScript'>
       alert('  Se Elimino Correctamente El Proveedor ');
       location.assign('../../vista/formularios/formulario_listado_proveedores.php?pagina=1');
       </script>";
       
   }else{
       echo "<script languaje=JavaScript'>
       alert('Los datos No se eliminaron correctamente');
       location.assign('../../vista/formularios/formulario_listado_proveedores.php?pagina=1');
       </script>";
   }
   
   
   ?>
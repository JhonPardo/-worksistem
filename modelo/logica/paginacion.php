<?php
include('conexion.php');
//cantidad de registros por pagina
$por_pagina=5;
if (isset($_GET['pagina'])){
    $paginado = $_GET['pagina'];;

}else{
    $pagina=1;
}

// la pagina unicia en 0 y se multiplica $por_pagina
$empieza=($pagina-1)=$por_pagina;

//seleccionar los registros de la tabla usuario con LIMIT
$query="SELECT*FROM cliente LIMIT $empieza, $por_pagina";

$resultado=mysqli_query($conexion, $query);

?>


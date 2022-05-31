<?php

session_start();

$_SESSION['usuario']=$datos-> usuario;
header("location: ../../vista/principal.php");



?>

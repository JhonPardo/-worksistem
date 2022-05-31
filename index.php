<!doctype html>
<?php
//para que no vuelva a pedir el login 
session_start();
if (isset($_SESSION['usuario'])){
    header('Location: vista/formularios/principal.php');
}
?>


<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<style type="text/css">
body {
    background-image: url(vista/img/nordkette-7022793_960_720.jpg);
    background-repeat: no-repeat;
	background-size:100%;
}
</style>
<link href="vista/css/archivo.css" rel="stylesheet" type="text/css">
</head>

<body>
	<form method="post" action="modelo/logica/login.php">
   <h1> <img src="vista/img/LOGO ASEOS CON AMOR.png" width="50%" height="" alt=""/></h1>
   <p>Usuario <input type="text" placeholder="ingrese su nombre" name="txtusuario"></p><br>
   <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="txtpassword"></p>
   <input type="submit" value="Ingresar">
	</form>	
</body>
</html>

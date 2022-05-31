<!doctype html>
<?php
/*para no permitir el acceso directo*/
session_start();
error_reporting(0);

$varsesion= $_SESSION['usuario'];
if($varsesion == null || $varsesion = ''){
	header("location:../../index.php");
	die();
}
?>
 <?php
		include_once("../../modelo/logica/conexion.php");	
	?>



<html lang="en">
  <head>
    <title>listado clientes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/estilos3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  
	
     <?php include('../estructura/header.php'); ?>

	 <?php
	 //se llaman a los articulos de la tabla 
	 $sql='SELECT*FROM cliente';
	 //se prepara la sentencia atravez de pdo $sql
	 $sentencia=$pdo->prepare($sql);
	 //ejecutar la sentencia 
	 $sentencia->execute();
//en el resultado se guarda todo 
	 $resultado = $sentencia->fetchAll();
	// var_dump($resultado);


//definimos el numero de filas que queremos ver por pagina 
	$cliente_x_pagina = 5;

	//luego calculamos en numero de clientes con la $sentencia->rowCount();
	$total_cliente_db = $sentencia->rowCount();
	//echo $total_cliente_db;
	//leugo asignamos una variable paginas y le metemos el numero de clientes y lo dividimos por el numero de paginas  
	$paginas= $total_cliente_db/5;
	//ceil para redondear el numero de paginas cuando el valor es decimal 
	$paginas = ceil($paginas);
	//echo $paginas;
	
	
	 ?>
            <section>
                <?php include('../estructura/menu.php'); ?>
                 <div class="col pt-3 ">
                    <h3 class="text-center"> Listado de Clientes </h3><hr>


 <!-- buscador-->
       
 						<div class=" container col-md-8"
                            nav class="navbar navbar-light bg-light  ">
                              <div class="container-fluid">
                                <form class="d-flex" method="get" action="">
                                <input class="form-control me-2" type="search" name="buscador" placeholder="Buscar" aria-label="Search"><br>
                                <button class="btn btn-outline-success "  type="submit" name="enviar">Buscar</button>
                                </form>
								
                              </div>
                              </nav>
							 
                            </div><br>


							<?php


						/*	if($_POST){
								requiere('conexion.php');
								$id=$_POST["documento"];
								$SQL = 'SELECT  id_cliente, nombre_cliente, telefono_cliente, direccion_cliente, correo_cliente FROM usuario WHERE identificacion=:doc ';
								$stmt = $pdo->prepare($SQL);
								$resultado = $stmt->execute(array('doc'=>$id, ));
								$rows = $stmt->fetchAll(\PDO::FETCH_OBJ);

								if(count($rows)){
									echo 'si existe';
								}else{
									echo 'no existe';
								}
							}*/
							?>

                        

						

                            <!-- inicio de tabla-->
				<form class="text-center" method="POST" name="form-work" action="../../modelo/logica/eliminarUsuarios.php">	
					<div class="table responsive">		
						<table class="table table-hover">
								<thead class="table-dark">
									<tr>
										<th scope="col">Identificación</th>
										<th scope="col">Nombre</th>
										<th scope="col">Teléfono</th>
										<th scope="col">Dirección</th>
										<th scope="col">Correo</th>
										<th scope="col">acciones</th>
									</tr>
								</thead>
								<tbody class="">
								<?php

									if(!$_GET){
										header('Location:formulario_listado_cliente.php?pagina=1');
									} 
									if($_GET['pagina']>$paginas || $_GET['pagina']<=0){
										header('Location:formulario_listado_cliente.php?pagina=1');
									}

								
								

									$iniciar=($_GET['pagina']-1)*$cliente_x_pagina;


									$sql_clientes = 'SELECT*FROM cliente LIMIT :iniciar,:ncliente';
									$sentencia_clientes = $pdo->prepare($sql_clientes);
									$sentencia_clientes->bindParam(':iniciar', $iniciar, PDO::PARAM_INT);
									$sentencia_clientes->bindParam(':ncliente', $cliente_x_pagina, PDO::PARAM_INT);
									$sentencia_clientes->execute();

									$resultado_clientes=$sentencia_clientes->fetchAll();

									?>


								<?php  foreach ($resultado_clientes as $filas):?>
									<tr>
										<td class="table-active"><?php echo $filas['id_cliente'] ?></td>
										<td> <?php echo $filas['nombre_cliente'] ?> </td>
										<td class="table-active"> <?php echo $filas['telefono_cliente'] ?> </td>
										<td> <?php echo $filas['direccion_cliente'] ?> </td>
										<td class="table-active"> <?php echo $filas['correo_cliente'] ?> </td>
										<td>
										
										<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editarcliente" data-bs-whatever="@mdo">Editar</button>

										
										
										
										<a href="../../modelo/logica/eliminarUsuarios.php?id=<?php echo $filas['id_cliente'];?>" class="btn  btn-outline-danger" role="button" data-bs-target="button">Eliminar</a> 

										


										</td>
									</tr>
									<?php
								endforeach;
								?>
								</tbody>
								
						</table>
						 
						


                        </form>
					</div>	

					<!-- paginador -->

<!--paso 4 = //validamos la pagina en la que estamos ?verificamos la variable $_GET y le restamos uno para retroceder-->
					<nav  aria-label="Page navigation example"  >
  <ul class="pagination ml-auto">
    <li class="page-item <?php echo $_GET['pagina']<=1? 'disabled': '' ?> " >
		<a class="page-link" href="formulario_listado_cliente.php?pagina=<?php echo $_GET['pagina']-1  ?>">Anterior</a></li>


<!--paso 2 = hacemos un ciclo for para repetir este campo las veses que nesecitemos   -->
	<?php for($i=0;$i<$paginas;$i++):?>

<!--paso 3=  ahora mandamos una variable get para identificar la pagina en la que estamos desde el navegador en href= referenciamos la pagina actual y con ?php echo $i+1 mandamos el numero de forma dinamica -->
    <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>"><?php ?>

<!--// paso 1 = este echo $i+1 es para crear los numero de forma dimanica 1-2-3 etc  -->
		<a class="page-link" href="formulario_listado_cliente.php?pagina=<?php echo $i+1 ?>"><?php echo $i+1 ?></a></li>

	<?php endfor;?>


    <li class="page-item
	<?php echo $_GET['pagina']>=$paginas? 'disabled': '' ?> "> <a class="page-link" href="formulario_listado_cliente.php?pagina=<?php echo $_GET['pagina']+1  ?>">Siguiente</a></li>
  </ul>
</nav>

				<!-- modal bootstrap para editar -->

					<div class="modal fade" id="editarcliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">

								<form method="post" action="">

										<div class="mb-3">
											<label for="recipient-name" class="col-form-label">Identificación:</label>
											<input name="id" type="text" class="form-control" id="recipient-name">
										</div>

										<div class="mb-3">
											<label for="recipient-name" class="col-form-label">Nombre:</label>
											<input name="nombre" type="text" class="form-control" id="recipient-name">
										</div>

										<div class="mb-3">
											<label for="recipient-name" class="col-form-label">Teléfono:</label>
											<input name="telefono" type="text" class="form-control" id="recipient-name">
										</div>

										<div class="mb-3">
											<label for="recipient-name" class="col-form-label">Direccion:</label>
											<input name="direccion" type="text" class="form-control" id="recipient-name">
										</div>

										<div class="mb-3">
											<label for="recipient-name" class="col-form-label">Correo:</label>
											<input name="email" type="text" class="form-control" id="recipient-name">
										</div>

										
								
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
								<button type="button" class="btn btn-primary">Guardar</button>
							</div>
							</div>
						</div>
						</div>

				</div>
									

            </section>
            <?php include('../estructura/footer.php'); ?>
			

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="../js/main.js"></script>
<?php 
	mysqli_close($conexion);
	?>
</body>
</html>
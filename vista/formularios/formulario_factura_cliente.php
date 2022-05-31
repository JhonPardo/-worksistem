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

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/estilos3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
     <?php include('../estructura/header.php'); ?>
            <section>
                <?php include('../estructura/menu.php'); ?>
                    <div class="col pt-3 ">
                    <h3 class="text-center"> Facturación </h3><hr>

              <form class="text-center" method="POST" name="form-work" action="../../modelo/logica/guardar.php">


                 <!-- espacio para fecha-->
                 <form class="" method="POST" name="" action="../../modelo/logica/fecha.php">  
                      <div> 
                        <?php include('../../modelo/logica/fecha.php');?>
                          <h5 class="text-center"> Fecha</h5>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                <label for="validationDefault01">Fecha y hora Actual</label>

                                <!--readonly onmousedown="return false; para que no se pueda editar la fecha y hora -->

                                <input type="datetime" value="<?= $fecha?>" readonly onmousedown="return false;" class="form-control" id="" name="fecha" placeholder="">
                            </div>
                                
                                <!-- boton de actualizar fecha opcional <input class="btn btn-primary btn-sm -md-3 ml-4 mt-4" name="actualizarFecha" type="submit" value="Submit">  -->
                      </div>
                </form><br>        
                                      
                      <!-- espacio empleado-->
                      
                      <div> 
                          <h5 class="text-center"> Datos Empleado </h5>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                <label for="validationDefault01">empleado</label>
                                <input type="text" value=" <?php echo $varsesion= $_SESSION['usuario']; ?>" readonly onmousedown="return false;" class="form-control id=" name="identificacion" type="text" placeholder="">
                                </div>

                      </div>

                                <!-- espacio cliente-->

                          <h5 class="text-center"> Datos del Cliente </h5>
                             
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">Identificación</label>
                                    <input type="text" class="form-control" id="" name="identificacion" type="text" required="required"  placeholder="N Identificación ">
                                    </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault02">Nombre</label>
                                    <input type="text" class="form-control" id="" value="" name="nombre" type="text" required="required"  placeholder="Ingrese Nombre" >
                                    </div>
                                </div>

                                <div class="form-row">
                                <div class="col-md-6 mb-3">
                                <label for="validationDefault01">Teléfono</label>
                                <input type="text" class="form-control" id="" name="telefono" type="text" required="required"  placeholder="Ingrese Teléfono">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault02">dirección</label>
                                    <input type="text" class="form-control" id="" value="" name="direccion" type="text" required="required"  placeholder="Ingrese Dirección" >
                                    </div>
                                </div>

                                
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault02">Correo Electronico</label>
                                    <input type="text" class="form-control" id="" value="" name="email" type="email" required="required"  placeholder="Ingrese Email" >
                                </div>

                                <!-- espacio producto  -->

                                <div> 
                                      <h5 class="text-center"> Datos Producto </h5>
                                         
                               <form class="text-center" method="POST" name="form-work" action="">
                                            <div class="table responsive">		
                                              <table class="table table-hover">
                                                  <thead class="table-dark">
                                                    <tr>
                                                      <th scope="col">Id Producto</th>
                                                      <th scope="col">Nombre Producto</th>
                                                      <th scope="col">Precio</th>
                                                      <th scope="col">Cantidad</th>
                                                      <th scope="col"></th>
                                                    </tr>
                                                  </thead>
                                                  <tbody class="">
                                                    <tr>
                                                      <td class="table-active"></td>
                                                      <td> </td>
                                                      <td class="table-active"></td>
                                                      <td> </td>
                                                      <td class="table-active"></td>
                                                    </tr>
                                                  </tbody>  
                                              </table>
						 

                                </form>
                                    <!-- boton modal  -->
                                  

                                      <button type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#agregarProdut" data-bs-whatever="@mdo">Agregar producto</button>

                                
                                      <button type="button" class="btn btn-danger mt-3">Eliminar</button>

                                     

                                  </div>  

                                  </div>   


                                </div>

                                
                                      


                                
                            
                            
                        </form>

                    </div>
                    <!-- modal  -->
                    
                    

                <div class="modal fade" id="agregarProdut" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Buscar Producto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Codigo de Producto:</label>
                            <input type="text" class="form-control" id="recipiente-codigo-producto">
                          </div>
                          
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Cantidad:</label>
                            <input type="text" class="form-control" id="recipiente-catidad">
                          </div>
                          <?php 
                              
	                        ?>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Agregar</button>
                      </div>
                    </div>
                  </div>
                  
                  <div>      
                  
                     </div>
                    
                </div>
                <?php include('../estructura/footer.php'); ?>

            </section>
            
          

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php 
	mysqli_close($conexion);
	?>
  </body>
</html>
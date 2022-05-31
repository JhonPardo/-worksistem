<!doctype html>

<?php
/*para no permitir el acceso directo*/
session_start();
error_reporting(0);

$varsesion= $_SESSION['usuario'];
if($varsesion == null || $varsesion = ''){
	header("location:../../Login.php");
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
                    <h3 class="text-center"> Registrar Nuevo Proveedor </h3><hr>
                        <form class="text-center" method="POST" name="" action="../../modelo/logica/insertarProv.php">

                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                <label for="validationDefault01">NIT o RUT</label>
                                <input type="text" class="form-control" id="" name="identificacion" type="text" required="required"  placeholder="N Identificación ">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault02">Nombre</label>
                                    <input type="text" class="form-control" id="" value="" name="nombre" type="text" required="required"  placeholder="Ingrese Nombre" >
                                    </div>
                                </div>

                                <div class="form-row">
                                  <div class="col-md-6 mb-3">
                                  <label for="validationDefault01">dirección</label>
                                  <input type="text" class="form-control" id="" name="direccion" type="text" required="required"  placeholder="Ingrese direccion">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault02">Telefono</label>
                                    <input type="text" class="form-control" id="" value="" name="telefono" type="text" required="required"  placeholder="Ingrese telefono" >
                                    </div>
                                </div>

                                
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault02">Correo Electronico</label>
                                    <input type="text" class="form-control" id="" value="" name="email" type="email" required="required"  placeholder="Ingrese Email" >
                                    </div>

                                    <div class="form-group ">
                                      <div class="col-sm-5 text-center " >
                                        <button type="submit" class="btn btn-primary btn-lg btn-block info">Guardar</button>
                                      </div><br>

                                
                                      <div class="form-group">
                                      <div class="col-md-5">
                                        <a href="formulario_listado_proveedores.php?pagina=1">
                                        <button type="button" class="btn btn-primary btn-lg btn-block info">Lista de Proveedores</button>
                                      </a></div>

                                  </div>  


                                </div>

                                
                                      


                                
                            
                            
                        </form>

                    </div>
            </section>
            <?php include('../estructura/footer.php'); ?>
          

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
  </body>
</html>
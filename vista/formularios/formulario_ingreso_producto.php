

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
    <title>pagina productos</title>
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
                    <h3 class="text-center"> Registrar Nuevo Producto </h3><hr>
                        <form class="text-center" method="POST" name="form-work" action="logica/insertarProduc.php">

                        

                            <div class="form-row">

                                <div class="col-md-6 mb-3">
                                <label for="validationDefault01">Id Producto</label>
                                <input type="text" class="form-control" id="" name="id" type="text" required="required"  placeholder="N Identificación ">
                                </div>

                                

                                <div class="col-md-6 mb-10">
                                <select class="form-select form-select ">
                                      <option selected>Seleccionar Proveedor</option>
                                      <option value="1">proveedor 1</option>
                                      <option value="2">proveedor 2</option>
                                      <option value="3">proveedor 3</option>
                                </select>
                                </div>
                                    

                                

                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault02">Nombre</label>
                                    <input type="text" class="form-control" id="" value="" name="nombre" type="text" required="required"  placeholder="Ingrese Producto" >
                                    </div>
                                
                                    <div class="col-md-6 mb-3">
                                    <label for="validationDefault02">Precio</label>
                                    <input type="numer" class="form-control" id="" value="" name="precio" required="required"  placeholder="Ingrese Precio" >
                                    </div>

                                
                                <div class="col-md-6 mb-3">
                                <label for="validationDefault01">Cantidad</label>
                                <input type="number" class="form-control" id="" name="cantidad"  required="required"  placeholder="Ingrese Cantidad">
                                </div>

                                
                                

                                
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault02">Descripción</label>
                                    <input type="text" class="form-control" id="" value="" name="descripcion" placeholder="Ingrese Descripción del Producto" >
                                    </div>

                                    <div class="form-group ">
                                      <div class="col-md-12 text-center " >
                                        <button type="submit" class="btn btn-primary btn-lg btn-block info">Guardar</button>
                                      </div> <br>

                                
                                      <div class="form-group">
                                      <div class="col-md-12">
                                        <a href="formulario_listado_producto.php?pagina=1">
                                        <button type="button" class="btn btn-primary btn-lg btn-block info">Listado de Productos Existentes</button>
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
    <?php 
	mysqli_close($conexion);
	?>
  </body>
</html>
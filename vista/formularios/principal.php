
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
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
     
  <?php include ('../estructura/header.php')?>
            <section>
            <?php include ('../estructura/menu.php')?>

            <!-- estadisticas y ventas -->

                <div class="col pt-5 ">
                        <div class="card border-primary mb-3 " style="max-width: 18rem;">
                                <div class="card-header font-weight-bold">Ventas Realizadas</div>
                                <div class="card-body text-primary">
                                <h5 class="card-title">Estadisticas Mensuales</h5>
                                </div>
                        </div>    
                </div>
                       
                <div class="col pt-5 ">
                        <div class="card border-success mb-3 " style="max-width: 18rem;">
                        <div class="card-header font-weight-bold">Clientes Registrados</div>
                        <div class="card-body text-primary">
                        <h5 class="card-title">Estadisticas Mensuales</h5>
                        </div>
                        </div>    
                </div>
                     
                <div class="col pt-5 ">
                        <div class="card border-danger mb-3 " style="max-width: 18rem;">
                        <div class="card-header font-weight-bold">Productos Vendidos</div>
                        <div class="card-body text-primary">
                        <h5 class="card-title">Estadisticas Mensuales</h5>
                        </div>
                        </div>    
                </div>

                     </div>
                     <div>      
                     <?php include('../estructura/footer.php')?>
                     </div>
                </div>
                
            </section>
            

          </div>
          
          
      </div>
     
      
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
<?php
echo $_GET['id'];
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Registro</title>
    <!-- Bootstrap CSS
    <link rel="stylesheet" href="css\bootstrap.min.css">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="css\estiloregistro.css">
    <!-- jQuery primero, despu�s Bootstrap JS.
    <script src="js\bootstrap.min.js" ></script>-->
  </head>

  <body>
    <div class="container text-center">
      <header>
      <!--NAVBAR-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="index.html" style="font-size:30px;" >Conoce tú Ciudad Guzmán</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lugares</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Lugares mejor votados</a>
                  <a class="dropdown-item" href="#">Lugares mas visitados</a>
                  <a class="dropdown-item" href="#">Tus lugares favoritos</a>
                  <a class="dropdown-item" href="registro_lugar.html">Registrar Lugar</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Eventos</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Eventos de la Ciudad</a>
                  <a class="dropdown-item" href="#">Eventos de la Comunidad</a>
                  <a class="dropdown-item" href="#">Tus Eventos</a>
                  <a class="dropdown-item" href="registro_evento.html">Registrar Evento</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="form_registro.html">Registrate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="form_login.html">Acceso</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Escribe aquí" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="buscar">Buscar</button>
            </form>
          </div>
        </nav>
      </header>

<!--CARRUSEL-->
<section class="CAROUSEL">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./db1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./db2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./db3.jpg" alt="Third slide">
            </div>
            </div>
        </div>
</section>

    <div class="row"  STYLE="BORDER:DOUBLE 10PX LIME">
        <div class="col-12">
            <h1>Detalles de Evento </h1>
        </div>
    </div>

<!--reglon 1 c-->   

    <div class="row"  STYLE="BORDER:DOUBLE 10PX LIME">
        <div class="col-md-5" STYLE="BORDER:DOUBLE 10PX LIME">
            <div class="row">
                <div class="col-12">
                    <h2>Lugar</h2>                   
                </div>           
            </div>
            <div class="row" >
                    <div class="col-12" id="img">
                        <img class="img-fluid" src="db4.jpg" alt="foto">               
                    </div>           
             </div>           
        </div>

<!--reglon 1 columna 2-->
        <div class="col-7"  STYLE="BORDER:DOUBLE 10PX LIME">
                <div class="row" >
                    <div class="col-12">
                        <h2 id="nombre"> Nombre</h2>  
                        </div>           
                </div>

                <div class="row">
                        <div class="col-12">
                            <h2 id="descripcion">Descripcion</h2>    
                        </div>           
                </div>           
        </div>
        
    </div>

<!--reglon 2-->
    <div class="row">
            <div class="col-4" STYLE="BORDER:DOUBLE 10PX LIME">
                <div class="row">
                    <div class="col-12">
                        <h5>Fecha</h5>                   
                    </div>           
                </div>

                <div class="row">
                        <div class="col-12" id="fecha">
                              
                        </div>           
                </div>

                <div class="row">
                    <div class="col-12">
                      <h5>Hora</h5>                   
                    </div>           
                </div>

                <div class="row">
                   <div class="col-12" id="hora_ini">         
                    </div>           
                </div>

                <div class="row">
                    <div class="col-12">
                      <h5>Costo</h5>                   
                    </div>           
                </div>

                <div class="row">
                   <div class="col-12" id="costo">      
                    </div>           
                </div>

                <div class="row">
                    <div class="col-12">
                      <h5>TIPO</h5>                   
                    </div>           
                </div>

                <div class="row">
                   <div class="col-12" id="tipo">      
                    </div>           
                </div>

                <div class="row">
                    <div class="col-12">
                      <h5>Fecha Fin</h5>                   
                    </div>           
                </div>

                <div class="row">
                   <div class="col-12" id="fecha_fin">      
                    </div>           
                </div>

            </div>

 <!--reglon 2 columna 2--> 

            <div class="col-8"  STYLE="BORDER:DOUBLE 10PX LIME">
                    <div class="row">
                        <div class="col-12">
                            <h5>Mapa</h5>                       
                        </div>           
                    </div>      
                    <div class="row">
                            <div class="col-12" id="map">                                  
                            </div>           
                    </div>   
                    <div class="row">
                         <div class="col-12">
                                <h5 id="direccion"> Direccion</h5>                       
                         </div>           
                    </div>   
            </div>
        </div>



      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
      <script src="js/funciones.js" charset="utf-8"></script>
      <script src="js/detalle_evento.js" charset="utf-8"></script>
      <script>
$(document).ready( function() {
  carga_detalle("<?php echo $_GET['id']; ?>","eventos","GET");

});
    </script>

    </body>
</html>
      
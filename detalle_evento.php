<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS
    <link rel="stylesheet" href="css\bootstrap.min.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <!-- jQuery primero, despu�s Bootstrap JS.
    <script src="js\bootstrap.min.js" ></script>-->
  </head>
  <body>
    <div class="container ">
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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Lugares
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Lugares mejor votados</a>
                  <a class="dropdown-item" href="#">Lugares mas visitados</a>
                  <a class="dropdown-item" href="#">Tus lugares favoritos</a>
                  <a class="dropdown-item" href="registro_lugar.html">Registrar Lugar</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Eventos
                </a>
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
                <a class="nav-link " href="form_login">Acceso</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Escribe aquí" aria-label="Search">
              <button id="buscar" class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
          </div>
        </nav>
      </header>
      <!--CARRUSEL-->
      <section class="CAROUSEL mb-2">
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
      <div class="row cont">
          <div class="col-md-12">   
            <h1 class="my-3 text-center det">Detalles del evento</h1>
            <div class="row arr">
              <div class="col-md-5" id="img">
                <img src="db1.jpg" alt="Imgane del evento" class="img-fluid">
              </div>
              <div class="col-md-7">
                <h2 id="nombre-evento">Nombre del evento</h2>
                <p id="descripcion-evento">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                   Rem atque ipsam optio distinctio eius, error nesciunt  
                   voluptates sunt earum, minus amet aspernatur beatae officiis 
                   molestiae eum. Adipisci nemo voluptatem neque consequatur laboriosam.</p>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-4">
                  <div class="row">
                      <div class="col-md-12">
                          <h2>Fecha</h2>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                      Del<p id="fecha-ini">15-12-2017</p> al <p id="fecha-fin">16-12-2017</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <h2>Hora</h2>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <p id="hora">3:00:00 P.M.</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <h2>costo</h2>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <p id="costo">1000</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Lugar</h2>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div id="map">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1878.010726282772!2d-103.46397374205128!3d19.71171079668161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842f86b01d50930f%3A0x1effef66773f8c02!2sCalle+Federico+del+Toro+331%2C+Cd+Guzm%C3%A1n+Centro%2C+49000+Cd+Guzman%2C+Jal.!5e0!3m2!1ses!2smx!4v1512593944146" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> 
                    </div>
                  </div>
                  <p id="direccion"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
    <footer class="mt-2">
    <div class="row">
        <div class="col-12">
        	<div class="row arriba">
        		<div class="col-3">
        			<a href="#">Quienes somos</a>
        		</div>
        		<div class="col-3">
        			<a href="#">Politicas de uso</a>
        		</div>
        		<div class="col-3">
        			<a href="#">Soporte</a>
        		</div>
        		<div class="col-3">
        			<a href="#">Donaciones</a>
                </div>
        	</div>
        	<div class="row">
        		<div class="col-12">
        			<ul>
        				<li>
        					<a href="http://www.facebook.com"><i class="fa fa-facebook-square fa-2x">&nbsp;&nbsp;</i></a>
        				</li>
        				<li>
        					<a href="http://www.twitter.com"><i class="fa fa-twitter-square fa-2x">&nbsp;&nbsp;</i></a>
        				</li>
        				<li>
        					<a href="http://www.instagram.com"><i class="fa fa-instagram fa-2x">&nbsp;&nbsp;</i></a>
        				</li>
        				<li>
        				    <a href="http://www.youtube.com"><i class="fa fa-youtube-square fa-2x" aria-hidden="true"></i></a>
        				</li>
        			</ul>
        		</div>
        	</div>
        	<div class="row">
        		<div class="col-12">
        			<div class="footerfinal">
        				Conoce tu Ciudad Guzman  ©  2017
        			</div>
        		</div>
        	</div>
        </div>
    </div>
   </footer>
  </div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBLwHlcCWRfGPmCS5ti87ntjH5rolWZZM4&libraries=visualization"></script>
<script src="js/detalle_evento.js"></script>
<script>
$(document).ready( function() {
    cargaDetalle("<?php echo $_GET['id'];?>","eventos","GET");
  });
</script>
</body>
</html>

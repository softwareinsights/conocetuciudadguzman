<?php 
    include "configuracion.php";
?>
<?php 
    include "routing.php";
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title; ?></title>

    <!-- Bootstrap CSS
    <link rel="stylesheet" href="vendor\css\bootstrap.min.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <!-- jQuery primero, despu�s Bootstrap JS.
    <script src="vendor\js\bootstrap.min.js" ></script>-->
  </head>
  <body>

  <div class="container text-center">

    <?php
      include "includes/header.php";
      include "includes/carrusel.php";
    ?>

    <?php 
      include "views/" . $view . ".php";
    ?>
  
    <?php
      include "includes/footer.php";
    ?>
</div>   

  <script src="vendor/js/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="js/funciones.js"></script>
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyBLwHlcCWRfGPmCS5ti87ntjH5rolWZZM4&libraries=visualization"></script>
  <script src="js/icmap.js"></script>


    <?php

    switch($view) {
  
      case "detalle_evento": 
      ?>
      <script src="js/detalle_evento.js"></script>
      <script>
        $(document).ready( function() {
              carga_detalle("<?php echo $_GET['id']; ?>","eventos","GET");
        });
      </script>
      <?php
      break;
  
      case "registro_evento": 
      ?>
      
      <?php
      break;
  
      case "form_login": 
        ?>
        
      <?php
      break;

      case "form_registro": 
        ?>
        
      <?php
      break;

      case "registro_lugar": 
      ?>
      <script src="js/registro_lugar.js"></script>
      <script>
        $(document).ready( function() {
        });
      </script>
      <?php
      break;
  
      case "form_restaurar": 
        ?>
        
      <?php
      break;
  
      default: 
      ?>
      <script src="js/eventos.js"></script>
      <script src="js/lugares.js"></script>
      <script>
        $(document).ready( function() {
          carga_card("eventos","tipo","CIUDAD","evento_ciudad","GET");
          carga_card("eventos","tipo","COMUNIDAD","evento_comunidad","GET");
          carga_lugar("lugares","descripcion","votados","lugar_votados","GET");
        });
      </script>
      <?php
      break;
  
    }
    ?>

  </body>
</html>

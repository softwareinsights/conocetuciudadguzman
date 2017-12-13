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
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo PATH;?>css/estilo.css">
    <link rel="stylesheet" href="<?php echo PATH;?>css/estiloregistro.css">
    <link rel="stylesheet" href="<?php echo PATH;?>css/font-awesome.min.css">
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

    <?php

    switch($view) {
  
      case "detalle_lugar": 
      ?>
      
  <script src="<?php echo PATH;?>vendor/js/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="<?php echo PATH;?>js/funciones.js"></script>
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyBLwHlcCWRfGPmCS5ti87ntjH5rolWZZM4&libraries=visualization"></script>
  <script src="<?php echo PATH;?>js/icmap.js"></script>
  <script src="<?php echo PATH;?>js/detalle_lugar.js"></script>
      <script>
        $(document).ready( function() {
              carga_detallelugar("<?php echo $_GET['id']; ?>","lugares","GET");
        });
      </script>
 

      <?php
      break;
      case "detalle_evento": 
      ?>
      
  <script src="<?php echo PATH;?>vendor/js/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="<?php echo PATH;?>js/funciones.js"></script>
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyBLwHlcCWRfGPmCS5ti87ntjH5rolWZZM4&libraries=visualization"></script>
  <script src="<?php echo PATH;?>js/icmap.js"></script>


      <script src="<?php echo PATH;?>js/detalle_evento.js"></script>
      <script>
        $(document).ready( function() {
              carga_detalle("<?php echo $_GET['id']; ?>","eventos","GET");
        });
      </script>
      <?php
      break;
  
      case "registro_evento": 
      ?>
      
      <script src="<?php echo PATH;?>vendor/js/jquery-ui.min.js"></script>
      <script src="<?php echo PATH;?>js/icmap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="<?php echo PATH;?>js/funciones.js"></script>
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyBLwHlcCWRfGPmCS5ti87ntjH5rolWZZM4&libraries=visualization"></script>
 


  <script src="<?php echo PATH;?>js/registro_evento.js"></script>
 
  <script>
  $(document).ready(function(){


   $("#submit").click(enviar);


    function enviar(e) {
      e.preventDefault();

      var evento = {
                      "nombre": ''+ $("#nombre").val() +'',
                      "foto": ''+ $("#foto").val() +'',
                      "lat": ''+ $("#lat").val() +'',
                      "lng": ''+ $("#lng").val() +'',
                      "direccion": ''+ $("#direccion").val() +'',
                      "descripcion": ''+ $("#descripcion").val() +'',
                      "fecha": ''+ $("#fecha").val() +'',
                      "hora_ini": ''+ $("#hora").val() +'',
                      "fecha_fin": ''+ $("#fecha_fin").val() +'',
                      "costo": ''+ $("#costo").val() +'',
                      "tipo": ''+ $("#tipo").val() +'',
                      "status": ''+ $("#status").val() +''
                    }
                    console.log(evento);
      registroevento(evento);
    }
    /*
      * Maps
      */
    var addresspickerMap = $('#direccion').addresspicker({
        regionBias: "mx",
        updateCallback: showCallback,
        mapOptions: {
            zoom: 16,
            center: new google.maps.LatLng('20.7217961, -103.38968779999999'),
            scrollwheel: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            streetViewControl: false
        },
        elements: {
            map: "#map_canvas",
            lat: "#lat",
            lng: "#lng"
        }
    });

    var gmarker = addresspickerMap.addresspicker("marker");
    gmarker.setVisible(true);
    addresspickerMap.addresspicker("updatePosition");
    var map = addresspickerMap.addresspicker("map");
    google.maps.event.trigger(map,"resize");

    $('#reverseGeocode').change(function(){
        $("#direccion").addresspicker("option", "reverseGeocode", ($(this).val() === 'true'));
    });

    function showCallback(geocodeResult, parsedGeocodeResult){
        // $('#callback_result').text(JSON.stringify(parsedGeocodeResult, null, 4));
    }

  });
  </script>

      
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
      
  <script src="<?php echo PATH;?>vendor/js/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="<?php echo PATH;?>js/funciones.js"></script>
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyBLwHlcCWRfGPmCS5ti87ntjH5rolWZZM4&libraries=visualization"></script>
  <script src="<?php echo PATH;?>js/icmap.js"></script>


      <script src="<?php echo PATH;?>js/registro_lugar.js"></script>
      <?php
      break;
  
      case "form_restaurar": 
        ?>
        
      <?php
      break;
  
      default: 
      ?>
      
  <script src="<?php echo PATH;?>vendor/js/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="<?php echo PATH;?>js/funciones.js"></script>
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyBLwHlcCWRfGPmCS5ti87ntjH5rolWZZM4&libraries=visualization"></script>
  


      <script src="<?php echo PATH;?>js/eventos.js"></script>
      <script src="<?php echo PATH;?>js/lugares.js"></script>
      <script>
        $(document).ready( function() {
          carga_card("eventos","tipo","CIUDAD","evento_ciudad","GET");
          carga_card("eventos","tipo","COMUNIDAD","evento_comunidad","GET");
          carga_lugar("lugares","GET","lugar_votados","voto","2");   
          carga_lugar("lugares","GET","lugar_recomendados","recomendado","2");

    


        });
      </script>
      <?php
      break;
  
    }
    ?>

  </body>
</html>

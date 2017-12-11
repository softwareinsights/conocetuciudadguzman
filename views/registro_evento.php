
  <div class="row">
    <div class="col-md-6 offset-3">
      <div class="row">
        <div class="col-12 " >
          <div class="titulo">
            <h1>Registra tú Evento</h1>
          </div>
        <div class="formularioR">
          <form role="form" action="" method="" class="">
            <div class="form-gruop">
              <label class="form-label" for="nombre"><strong>Nombre: </label>
              <input type="text" name="nombre" placeholder="Nombre" class="form-control" id="nombre" required><br>
            </div>
            <div class="form-gruop">
              <label class="form-label" for="foto"><strong>FOTO: </label>
              <input type="text" name="foto" placeholder="URL de la FOTO" class="form-control" id="foto" required><br>
            </div>
            <div class="form-gruop">
              <label class="form-label" for="direccion"><strong>Dirección: </label>
              <input type="text" name="direccion" placeholder="Ingresa tú dirección" class="form-control" id="direccion" required> <br>
            </div>
            <div class="form-gruop">
              <div class='map-wrapper'>
                  <p id="geo_label" for="reverseGeocode">¿Actualizar dirección al arrastrar el marcador?
                  <select name="reverseGeocode" id="reverseGeocode">
                      <option value="false" selected>No</option>
                      <option value="true">Si</option>
                  </select></p>
                  <br/>
                  <div id="map_canvas" style="width: 400px; height: 280px; margin: 0 auto;"></div>
                  <div id="callback_result" class="hidden"></div>
              </div>
            </div>
            <div class="form-gruop">
              <label class="form-label" for="lat"><strong>Latitud:</label>
              <input type="text" name="lat" placeholder="Latitud" class="form-control" id="lat" required> <br>
            </div>
            <div class="form-gruop">
              <label class="form-label" for="lng"><strong>Longitud: </label>
              <input type="text" name="lng" placeholder="longitud" class="form-control" id="lng" required> <br>
            </div>
            <div class="form-gruop">
              <label class="form-label" for="descripcion"><strong>Descripción: </label>
              <input type="text" name="descripcion" placeholder="Descripción" class="form-control" id="descripcion" required> <br>
            </div>
            <div class="form-gruop">
              <label class="form-label" for="fecha"><strong>Fecha: </label>
              <input type="date" name="fecha" placeholder="" class="form-control" id="fecha" required> <br>
            </div>
            <div class="form-gruop">
              <label class="form-label" for="hora_ini"><strong>Hora: </label>
              <input type="time" name="hora_ini" placeholder="" class="form-control" id="hora_ini" required> <br>
            </div>
            <div class="form-gruop">
              <label class="form-label" for="fecha_fin"><strong>Fecha Fin: </label>
              <input type="date" name="fecha_fin" placeholder="" class="form-control" id="fecha_fin" required> <br>
            </div>
            <div class="form-gruop">
              <label class="form-label" for="costo"><strong>Costo: </label>
              <input type="number" name="costo" placeholder="$" class="form-control" id="costo" required> <br>
            </div>

            <div class="form-gruop">
              <label class="form-label" for="status"><strong>Status: </label>
              <input type="text" name="status" placeholder="status" class="form-control" id="status" required> <br>
            </div>



              <div class="form-gruop">
                <label class="form-label" for="tipo"><strong>Tipo: </label>
                  <select name="tipo" id="tipo" required>
                  <option>CIUDAD</option> <option>COMUNIDAD</option>
                  </select>
              </div>


              <button type="submit" class="btn btn-outline-primary" id="submit">Ok</button>
            </form>
          </div>
        </div>

      </div>
    </div>
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
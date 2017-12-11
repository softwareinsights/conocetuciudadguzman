
   
<div class="row">
  <div class="col-md-6 offset-3">
    <div class="row">
      <div class="col-12 " >
        <div class="titulo">
          <h1>Registro</h1>
        </div>
        <div class="formularioR">
          <form role="form" action="" method="" class="">
            <div class="form-gruop">
              <label class="form-label" for="nombre"><strong>Nombre: </label>
              <input type="text" name="realm" placeholder="Nombre" class="form-control" id="realm" required><br>
            </div>
            <div class="form-gruop">
              <label class="form-label" for="email"><strong>Email:</label>
              <input type="email" name="email" placeholder="Email" class="form-control" id="email" required> <br>
            </div>
            <div class="form-gruop">
              <label class="form-label" for="password"><strong>Password: </label>
              <input type="password" name="password" placeholder="Password" class="form-control" id="password" required> <br>
            </div>
            <div class="form-gruop">
              <label class="form-label" for="repassword"><strong>Repite tú password: </label>
              <input type="password" name="repassword" placeholder="Repite la contraseña" class="form-control" id="repassword" required> <br>
            </div>
            <div class="form-gruop">
              <label class="form-label" for="telefono"><strong>Teléfono: </label>
              <input type="phone" name="telefono" placeholder="Teléfono" class="form-control" id="telefono" required> <br>
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

      if($("#password").val() !== $("#repassword").val() ){
        alert("No coinciden las contraseñas");
        return  false;
      }

      var registro = {
                      "realm": ''+ $("#realm").val() +'',
                      "telefono": ''+ $("#telefono").val() +'',
                      "email": ''+ $("#email").val() +'',
                      "password": ''+ $("#password").val() +'',
                      "tipo": "CIUDADANO"
                    }
                    console.log(registro);
      enviarRegistro(registro);
    }

  });
  </script>



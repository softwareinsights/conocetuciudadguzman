    <header>
    <!--NAVBAR-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="<?php echo PATH;?>" style="font-size:30px;" >Conoce tú Ciudad Guzmán</a>
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
                  <a class="dropdown-item" href="<?php echo PATH;?>registro_lugar">Registrar Lugar</a>
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
                  <a class="dropdown-item" href="<?php echo PATH;?>registro_evento">Registrar Evento</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo PATH;?>form_registro">Registrate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo PATH;?>form_login">Acceso</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo PATH;?>?cerrar_sesion=1">Cerrar sesión</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
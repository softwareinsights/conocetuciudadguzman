
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

      <script>
            $(document).ready( function() {
            carga_detalle("<?php echo $_GET['id']; ?>","eventos","GET");

            });
     </script>

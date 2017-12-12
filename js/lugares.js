
function carga_lugar(metodo,container,tipo){
    console.log(metodo,tipo);
    
      $.ajax({
           url: "http://conocetucdgapi.herokuapp.com/api/"+metodo+"?filter=%7B%22order%22%3A%22voto%20DESC%22%2C%22limit%22%3A2%7D", 
           type: tipo,
           crossDomain: true,
           dataType: "JSON",
           success: function (data, status) {
              if (status=="success") {
                   $.each(data,pintarCard);
                   function pintarCard(index){
                      var lugar = data[index];
                      var html =  
                                       '<div class="col-6">' +
                                           '<article>' +
                                               '<div class="card" style="width: 20rem;">' +
                                               '<img class="card-img-top" src="' + lugar.foto + '" alt="Card image cap">' +
                                               '<div class="card-body">' +
                                                   '<h4 class="card-title">' + lugar.nombre + '</h4>' +
                                                   '<p class="card-text">' + lugar.descripcion + '</p>' +
                                                   '<a href="#" class="btn btn-primary">Ver más</a>' +
                                                   '<a href="#"><i class="fa fa-check" id="boton'+lugar.id+'"></i></a>' +
                                               '</div>' +
                                           '</div>' +
                                           '</article>' +
                                       '</div>' +
                                   '</div>'+
                                   '<br>';
                                 
                      var contenedor = $("#" + container);
                      contenedor.append(html);
    
                }
               }
           },
           error: function (xhr, status) {
            console.log(metodo,tipo);
               alert("error");
           }
       });
    
    }
    
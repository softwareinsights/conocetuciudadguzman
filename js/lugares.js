
function carga_lugar(metodo, tipo,container, order,limite){
    
    
      $.ajax({
 
           url:"http://conocetucdgapi.herokuapp.com/api/"+metodo+"?filter=%7B%22order%22%3A%22"+order+"%20DESC%22%2C%22limit%22%3A"+limite+"%7D",
        
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
                                               '<img class="card-img-top" src="' + lugar.foto + '" alt="Card image cap" class="img-fluid">' +
                                               '<div class="card-body">' +
                                                   '<h4 class="card-title">' + lugar.nombre + '</h4>' +
                                                   '<p class="card-text">' + lugar.descripcion + '</p>' +
                                                   '<a href="#" class="btn btn-primary">Ver más</a>' +
                                               '</div>' +
                                           '</div>' +
                                           '</article>' +
                                       '</div>';
                                  
                      var contenedor = $("#" + container);
                      contenedor.append(html);
    
                }
               }
           },
           error: function (xhr, status) {
               alert("error");
           }
       });
    
    }
    
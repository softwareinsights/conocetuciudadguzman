
function carga_lugar(metodo,clave,valor,container,tipo){
    console.log(metodo,clave,valor,container,tipo);
    
      $.ajax({
           url: "http://conocetucdgapi.herokuapp.com/api/"+metodo+"?filter=%7B%22where%22%3A%7B%22"+clave+"%22%3A%22"+valor+"%22%7D%7D&", 
           
        
           type: tipo,
           crossDomain: true,
           dataType: "JSON",
           success: function (data, status) {
              if (status=="success") {
                   $.each(data,pintarCard);
                   function pintarCard(index){
                      var lugar = data[index];
                      var html =  '<div class="row">' +
                                       '<div class="col-12">' +
                                           '<article>' +
                                               '<div class="card" style="width: 20rem;">' +
                                               '<img class="card-img-top" src="' + lugar.foto + '" alt="Card image cap">' +
                                               '<div class="card-body">' +
                                                   '<h4 class="card-title">' + lugar.nombre + '</h4>' +
                                                   '<p class="card-text">' + lugar.descripcion + '</p>' +
                                                   '<a href="#" class="btn btn-primary">Ver más</a>' +
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
               alert("error");
           }
       });
    
    }
    
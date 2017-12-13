
function carga_lugar(metodo, tipo, container, order, limite){
      $.ajax({
           url: "http://conocetucdgapi.herokuapp.com/api/"+metodo+"?filter=%7B%22order%22%3A%22"+order+"%20DESC%22%2C%22limit%22%3A"+limite+"%7D", 
           type: tipo,
           crossDomain: true,
           dataType: "JSON",
           success: function (data, status) {
              if (status=="success") {
                   $.each(data,pintarCard);
                   function pintarCard(index){
                      var lugar = data[index];
                      var html =  '<div class="col-6">' +
                                        '<article>' +
                                            '<div class="card" style="width: 20rem;">' +
                                               '<img class="card-img-top" src="' + lugar.foto + '" alt="Card image cap">' +
                                               '<div class="card-body">' +
                                                   '<h4 class="card-title">' + lugar.nombre + '</h4>' +
                                                   '<p class="card-text">' + lugar.descripcion + '</p>' +
                                                   '<a href="#" class="btn btn-primary">Ver más</a>'+ 
                                                   '<button class="btn btn-secondary btn_like" data-like="'+lugar.voto+'" data-id="'+lugar.id+'"> Like ' + ((lugar.voto!==undefined) ? lugar.voto : 0) + '<i class="fa fa-thumbs-o-up"></i></button>'+
                                               '</div>' +
                                           '</div>' +
                                        '</article>' +
                                    '</div>';
                      var contenedor = $("#" + container);
                      contenedor.append(html);

                }


                // FUNCIÒN QUE ENVÌA ID Y VOTOS A MODIFICARSE
                $(".btn_like").click(patchLugar);
        
                    function patchLugar(e){
                    e.preventDefault();

      
                    var button = $(this);
                    var likes_value = button[0].dataset.like;
                    
                    likes_value = +likes_value;
                    likes_value ++;

                    var id_value =button[0].dataset.id;
                    var lugar_patch = {
                        "voto":  likes_value
                    }
        
                    $.ajax({
                        url: "http://conocetucdgapi.herokuapp.com/api/lugares/"+id_value, 
                        type: "PATCH",
                        crossDomain: true,
                        dataType: "JSON",
                        data: lugar_patch,
                        cache: false,
                        success: function (data, status) {
                            if (status=="success") {
                                button.text(' Like ' + likes_value);
                                alert("Tu like fue añadido");
                            }
                        },
                        error: function (xhr, status) {
                            alert("error");
                        }
                    });
                    }


               }
           },
           error: function (xhr, status) {
               alert("error");
           }
       });
    
    }

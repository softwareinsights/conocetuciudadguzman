
function carga_detallelugar(id,metodo,tipo){
    console.log(id);
      $.ajax({
           url: "http://conocetucdgapi.herokuapp.com/api/"+metodo+"/"+id,
           type: tipo,
           crossDomain: true,
           dataType: "JSON",
           success: function (data, status) {
                    var map = $("#map");
                    var direccion = $("#direccion");
                    var nombre = $("#nombre");
                    var recomendado = $("#recomendado");
                    var descripcion = $("#descripcion");
                    var img = $("#img");
                    var voto = $("#voto");
                    var iframe =  "<iframe src='https://www.google.com.mx/maps/place/Barra+de+Navidad,+Jal./@"+data.lat+","+data.lng+",15z/data=!4m5!3m4!1s0x8424b8f557d08435:0x466dced5494b4b26!8m2!3d19.2081099!4d-104.6826949' width='600' height='450' frameborder='0' style='border:0' allowfullscreen></iframe>";
                    var img_html = "<img class='img-fluid' src='"+data.foto+"' alt='foto'>";         
                    console.log(direccion);   
                    
                    nombre.html(data.nombre);
                    map.html(iframe);
                    img.html(img_html);
                    direccion.html(data.direccion);
                    nombre.html(data.nombre);
                    descripcion.html(data.descripcion);
                    recomendado.html(data.recomendado);
                    voto.html(data.voto);

           },
           error: function (xhr, status) {
               alert("error");
           }
       });
    
    }
    
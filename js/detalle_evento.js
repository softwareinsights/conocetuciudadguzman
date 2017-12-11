function cargaDetalle(id,metodo,tipo){
    $.ajax({
        url:"https://conocetucdgapi.herokuapp.com/api/"+metodo+"/"+id,
        method: tipo,
        dataType:"JSON",
        success: function(data,status){
            var map=$("#map");
            var direccion=$("#direccion");
            var img=$("#imagen");
            var iframe="<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.275666228851!2d"+data.lng+"!3d"+data.lat+"!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842f86a01b5d995b%3A0xc05d099b08b9d7e8!2sLas+Pe%C3%B1as%2C+49063+Ciudad+Guzm%C3%A1n%2C+Jalisco!5e0!3m2!1ses-419!2smx!4v1512593620215' width='400' height='300' frameborder='0' style='border:0' allowfullscreen></iframe>";
            var imagen="<img src="+ data.foto + "alt='imagen del evento' class='img-fluid'>";
            var nombre = $("#nombre");
            var descripcion = $("#descripcion");
            var fecha = $("#fecha");
            var hora = $("#hora");
            var costo = $("#costo");
            map.html(iframe);
            img.html(imagen);
            direccion.html(data.direccion);
            nombre.html(data.nombre);
            descripcion.html(data.descripcion);
            fecha.html(data.fecha);
            hora.html(data.hora);
            costo.html(data.costo);
    },
    error: function(error){
        alert(error.responseJSON.error.message);
    }
    });

};
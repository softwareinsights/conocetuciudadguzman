function cargaDetalle(id, metodo, tipo){
    $.ajax({
        url: "https://conocetucdgapi.herokuapp.com/api/" + metodo + "/"+id,
        method: tipo,
        dataType: "JSON",
        success: function (data, status) {
            var map = $("#map");
            var direccion = $("#direccion");
            var nombre = $("#nombre-evento");
            var descripcion = $("#descripcion-evento");
            var fechaIni = $("#fecha-ini");
            var fechaFin = $("#fecha-fin");
            var hora = $("#hora");
            var img = $("#img");
            var iframe ="<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1878.010726282772!2d" + data.lng + "!3d" + data.lat + "!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842f86b01d50930f%3A0x1effef66773f8c02!2sCalle+Federico+del+Toro+331%2C+Cd+Guzm%C3%A1n+Centro%2C+49000+Cd+Guzman%2C+Jal.!5e0!3m2!1ses!2smx!4v1512593944146' width='400' height='300' frameborder='0' style='border:0' allowfullscreen></iframe>";
            var img_html = "<img src=" + data.foto + " alt='Imgane del evento' class='img-fluid'>";
            var costo = $("#costo");

            map.html(iframe);
            img.html(img_html);
            direccion.html(data.direccion);
            nombre.html(data.nombre);
            descripcion.html(data.descripcion);
            fechaIni.html(data.fecha);
            fechaFin.html(data.fecha_fin);
            hora.html(data.hora_ini);
            costo.html(data.costo);

        }
        
    });
}
$(function(){

    //variable
      var botton = $("#buscar");

      //detecta evento
      botton.click(cambiarClase);

    function cambiarClase(e){
      e.preventDefault();
      //traer todos los h2
      var titulos = $("h2");

      //cambiar clase

      titulos.addClass("tituloAzul");
    }

  botton.dblclick(dobleClick);

    function dobleClick(e){
      e.preventDefault();
      //traer todos los h2
      var titulos = $("h2");

      //cambiar clase

      titulos.removeClass("tituloAzul");

    }

});

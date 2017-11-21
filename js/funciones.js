//eventoClick
$(function(){
  //tomar el elemento
  var boton1 = $("#buscar");
  var boton2 = $("#regresar");
  //detectar evento
  boton1.click(cambiarclase);
  boton2.click(regresarclase);
  function cambiarclase(e){
    //guardamos la funcion y desactivamos los eventos que trae por default
    e.preventDefault();
    //tomar todos los h2
    var titulos = $("h2");
    //cambiar clase
    titulos.addClass("tituloazul");
  }
  function regresarclase(e){
    e.preventDefault();
    var titulos2 = $("h2");
    titulos2.removeClass("tituloazul");
  }
});

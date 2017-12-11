function registroevento(evento){
console.log(evento);
  $.ajax({
      url: "http://conocetucdgapi.herokuapp.com/api/eventos",
      type: "POST",
      crossDomain: true,
      dataType: "JSON",
      data: evento,
      success : function(response, status){
        if(status === "success") {
            alert("Evento Registrado correctamente");
            window.location.href="index.html";
        } else {
            alert("Error al Realizar el registro, Intentalo mas tarde");
        }
      },
      error: function(error){
          alert(error.responseJSON.error.message);
      }
    });

}

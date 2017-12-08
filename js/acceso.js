function enviarAcceso(acceso){
console.log(acceso);
  $.ajax({
      url: "http://conocetucdgapi.herokuapp.com/api/usuarios/login",
      type: "POST",
      crossDomain: true,
      dataType: "JSON",
      data: acceso,
      success : function(response, status){
        if(status === "success") {
            alert("Acceso autorizado");
            window.location.href="index.html";
        } else {
            alert("Un error ha ocurrido");
        }
      },
      error: function(error){
          alert(error.responseJSON.error.message);
      }
    });

}

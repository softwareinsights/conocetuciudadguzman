function enviarRegistro(registro){
console.log(registro);
  $.ajax({
      url: "http://conocetucdgapi.herokuapp.com/api/usuarios",
      type: "POST",
      crossDomain: true,
      dataType: "JSON",
      data: registro,
      success : function(response, status){
        if(status === "success") {
            alert("Usuario agregado");
            window.location.href="form_login.html";
        } else {
            alert("Un error ha ocurrido");
        }
      },
      error: function(error){
          alert(error.responseJSON.error.message);
      }
    });

}

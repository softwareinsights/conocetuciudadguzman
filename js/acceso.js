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
            alert("Has ingresado a tu perfil");
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

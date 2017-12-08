
function registrolugar(lugar){
console.log(lugar);
  $.ajax({
      url: "http://localhost:3000/api/lugares",
      type: "POST",
      crossDomain: true,
      dataType: "JSON",
      data: lugar,
      success : function(response, status){
        if(status === "success") {
            alert("Lugar Registrado correctamente");
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

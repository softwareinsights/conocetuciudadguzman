function enviarRegistro(registro){
<<<<<<< HEAD
console.log(registro);
  $.ajax({
      url: "http://localhost:3000/api/usuarios",
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
=======
    $.ajax({
        url:"http://localhost:3000/api/usuarios",
        type:"POST",
        crossDomain:true,
        dataType: "JSON",
        data: registro,
        success: function(data, status){

            if(status=="success"){
                alert("User Registered =^w^= Your Id:" + data.id);
                window.location.href="form_login.html";

            }

        },
        error: function(error) {
            alert(error.responseJSON.error.message);

        }
    })

};

>>>>>>> alexander

function enviarRegistro(registro){
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


function enviarLogin(Login){
    console.log(Login);
    $.ajax({
        url:"http://localhost:3000/api/usuarios/login",
        type:"POST",
        crossdomain: true,
        dataType:"JSON",
        data: Login,
        success: function(data,status){
            if(status==="success"){
                alert("Felicidades");
                window.location.href="index.html";
            }
            else{
                alert("Explotó");
            }
            

        },
        error: function(error){
            alert(error.responseJSON.error.message);
            window.location.href="index.html";
        }
    });
}
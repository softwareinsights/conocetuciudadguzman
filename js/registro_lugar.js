function enviarRegistro(registro){
  $.ajax({
       url:"http://localhost:3000/api/lugares",
       type: "POST",
       crossDomain: true,
       dataType: "json",
       data: registro,
       success: function (data, status) {
         console.log('data', data);
          if (status=="success") {
               alert("registro completo");
           }
           else {
             alert("Hubo un error");
           }
       },
       error: function (xhr, status) {
           alert("error");
       }
   });
}

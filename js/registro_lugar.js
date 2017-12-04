function registro_lugar(Lugar){
    $.ajax({
        url:a , 
        type:"POST",
        crossdomain:true,
        dataType:"JSON",
        data: Lugar,

    });

}
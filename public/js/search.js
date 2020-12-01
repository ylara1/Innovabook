var buscador = $("#table").DataTable();

$("#texto").keyup(function(){
    
    buscador.search($(this).val()).draw();
    
    if ($("#texto").val() == ""){
        $(".content-search").fadeOut(300);
    }else{
        $(".content-search").fadeIn(300);
    }
})
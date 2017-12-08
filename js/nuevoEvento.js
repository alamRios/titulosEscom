$(document).ready(function(e){
    $("#formUpl").submit(function(e){
        e.preventDefault();
        $('#archivoEstudiantes').parse({
            config : {
                complete : function (res){
                    var req = res; 
                    req.idevento = 1; 
                    $.ajax({
                        method:"post",
                        url:"/titulosEscom/php/eventos/registrarAlumnosAEvento.php",
                        dataType: "json",
                        data: {alumnosAEvento:req},
                        success : function(res){
                            console.log(res);
                        }
                    })
                }
            }
        });
    })
});

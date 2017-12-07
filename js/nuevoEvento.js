$(document).ready(function(e){
    $("#formUpl").submit(function(e){
        e.preventDefault();
        //var formulario = new FormData($(this)[0]); //!IMPORTANT
        //console.log(formulario);
        $('#archivoEstudiantes').parse({
            config : {
                complete : function (res){
                    console.log(res.data);
                }
            }
        });
    })
});

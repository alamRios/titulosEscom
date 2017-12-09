$(document).ready(function(e){
    $('#loader').hide();
    $("#formUpl").submit(function(e){
        e.preventDefault();
        $('#loader').show();
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
                            $('#loader').hide();
                            if(res == 1){
                                swal(
                                    'Alumnos añadidos correctamente',
                                    'Se han creado todas las invitaciones.',
                                    'success'
                                  )
                            }else{
                                swal(
                                    'Error al registrar alumnos',
                                    'Detalle: '+res,
                                    'error'
                                  )
                            }
                        }
                    })
                }
            }
        });
    })
});

// JavaScript Document
$(document).ready(function(){
    
	$("#loginForm").submit(function(e){
		e.preventDefault(); 
		var datos = $(this).serialize(); 
		$.ajax({
			method:"post",
			url:"php/login.php",
			data:datos,
			cache:false,
			success: function(respAX){
				if(respAX == "1")
                                    $(location).attr("href","/titulosEscom/inicio/");
				else
                                    swal(
                                        'Usuario y/o contraseña incorrectos',
                                        'Favor de verificarlos',
                                        'error'
                                      )
			}
		});
	});
});
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
					alert("Usuario valido");
				else
					alert("usuario invalido");
			}
		});
	});
});
$(document).ready(function(e) {
	$("#load").hide();
	$("#formAcc").validetta({
		bubblePosition: 'bottom',
        bubbleGapTop: 10,
        bubbleGapLeft: -5,
		onValid:function(event){
			$("#load").show();
			event.preventDefault();
			$.ajax({
				method:"post",
				url:"prueba_base.php",
				data:$("#formAcc").serialize(),
				success: function(resp){
					$("#load").hide();
					var obj = JSON.parse(resp);
					$("#respAX").html(obj.titulo+"-"+obj.lugar+"-"+obj.fecha)
				}
			});	
		}
	});
	
	/*
    $("#formAcc").submit(function(e) {
		e.preventDefault();
		$("#load").show();
        $.ajax({
			method:"post",
			url:"formularioAX.php",
			data:$("#formAcc").serialize(),
			success: function(resp){
				$("#load").hide();
				$("#respAX").html(resp)
			}
		});
    });
	*/
});
<?php
    include("../configbd.php");
    
    $SQL_VERIFICAR_ALUMNO_BY_BOLETA = "SELECT * FROM estudiantes WHERE boleta = '$boleta'";
	
    
    $alumnosInvitados = $_POST["alumnosAEvento"]["data"];
    $idevento = $_POST["alumnosAEvento"]["idevento"]; 
    
    $counter = 0; 
    foreach($alumnosInvitados as $alumno){
        if($counter){
            if(verificarUsuarioRegistrado($alumno[20])){
                registrarABanco($alumno);
            }
            registrarAlumnoEnEvento($alumno[20],$idevento);
        }else{
            $counter = 1; 
        }
    }
    
    
    function verificarUsuarioRegistrado($boleta){
        $resVer = mysqli_query($conn, $SQL_VERIFICAR_ALUMNO_BY_BOLETA);
	
	$estudiante = mysqli_fetch_assoc($resVer);
    }
    
    function registrarAlumnoEnEvento($boleta,$idevento){
        
    }
    
    function registrarABanco($alumno){
        
    }
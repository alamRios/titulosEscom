<?php
    include("../configbd.php");
    
    $alumnosInvitados = $_POST["alumnosAEvento"]["data"];
    $idevento = $_POST["alumnosAEvento"]["idevento"]; 
    
    $counter = 0; 
    try {
        foreach($alumnosInvitados as $alumno){
            if($counter){
                $estudianteid = alumnoRegistrado($alumno[20],$conn); 
                if($estudianteid == 0){
                    $estudianteid = registrarABanco($alumno,$conn);
                }
                registrarAlumnoEnEvento($estudianteid,$idevento,$conn);
            }else{
                $counter = 1; 
            }
        }
        echo 1;
    } catch (Exception $ex) {    
        echo $ex->getMessage(); 
    }
    
    
    function alumnoRegistrado($boleta,$conn){
        $SQL_VERIFICAR_ALUMNO_BY_BOLETA = "SELECT idestudiante FROM estudiante WHERE estudiante_boleta = '$boleta'";
        $resVer = mysql_query($SQL_VERIFICAR_ALUMNO_BY_BOLETA,$conn) or die("Consulta fallida");
	if($estudiante = mysql_fetch_array($resVer)){
            return $estudiante["idestudiante"]; 
        }
        return 0; 
    }
    
    function registrarAlumnoEnEvento($idestudiante,$idevento,$conn){
        $sqlIns = "INSERT INTO evento_estudiante(evento_estudiante_idestudiante,evento_estudiante_idevento,evento_estudiante_estatus) VALUES($idestudiante,$idevento,1);";
        $resIns = mysql_query($sqlIns,$conn);
        $infIns = mysql_affected_rows($conn);
        if($infIns == 0){
            throw new Exception("Error al insertar al estudiante en evento: ".$sqlIns);
        }
    }
    
    function registrarABanco($alumno,$conn){
        $sqlIns = "insert into usuario(idusuario,usuario_correo,usuario_nombre) values('$alumno[20]','$alumno[18]','$alumno[19]')";
	$resIns = mysql_query($sqlIns,$conn);
	$infIns = mysql_affected_rows($conn);
	if($infIns == 1){
            $sqlIns = "INSERT INTO estudiante(estudiante_turno, estudiante_genero, estudiante_telefono, estudiante_movil, estudiante_fechaNacimiento, estudiante_boleta) VALUES('$alumno[12]', 1, '$alumno[16]', '$alumno[17]', '$alumno[15]', '$alumno[20]');";
            $resIns = mysql_query($sqlIns,$conn);
            $infIns = mysql_affected_rows($conn);
            if($infIns == 1){
                return mysql_insert_id($conn);
            }else{
                throw new Exception("Error al insertar al estudiante: ".$sqlIns);
            }
	}else{
            throw new Exception("Error al insertar usuario: ".$alumno[20]."--".$sqlIns);
        }
    }
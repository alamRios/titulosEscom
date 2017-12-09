<?php
	error_reporting(E_WARNING );
        
        $conn= mysql_connect("localhost","root","") or die('No se pudo conectar');
	mysql_select_db("escomtitulos",$conn) or die (
	"Error: No es posible establecer la conexión"
	);
	//mysqli_set_charset($conn, "utf8");
?>
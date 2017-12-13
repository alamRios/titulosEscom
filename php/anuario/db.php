<?php

/**
* Conexion a la base de datos y funciones
* Autor: evilnapsis
**/

function con(){
	return new mysqli("localhost","root","","escomtitulos");
}

function insert_img($folder, $image,$ide,$ides,$bol){
	$con = con();
	$con->query("insert into evento_estudiante_foto(evento_estudiante_foto_folder,evento_estudiante_foto_src,evento_estudiante_foto_idevento,evento_estudiante_foto_idestudiante,evento_estudiante_foto_valido,evento_estudiante_foto_created_at) value (\"$folder\",\"$image\",$ide,$ides,$bol,NOW())");
}

function get_imgs(){
	$images = array();
	$con = con();
	$query=$con->query("select * from evento_estudiante_foto order by evento_estudiante_foto_created_at desc");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function get_img($id){
	$image = array();
	$con = con();
	$query=$con->query("select * from evento_estudiante_foto where evento_estudiante_foto_idestudiante=$id");
	while($r=$query->fetch_object()){
		$image[] = $r;
$image = null;
	$con = con();
	$query=$con->query("select * from evento_estudiante_foto where id=$id");
	while($r=$query->fetch_object()){
		$image = $r;
	}
	return $image;
}

function get_validar($v,$id){
	$con = con();
	$query=$con->query("UPDATE evento_estudiante_foto SET  valido =$v WHERE evento_estudiante_foto_idestudiante =$id");  /*update image set valido=$v where id=39");*/
}

function del($id){
	$con = con();
	$con->query("delete from evento_estudiante_foto where id=$id");
}

?>
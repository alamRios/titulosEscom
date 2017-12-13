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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1308092b8f21de9c4967c89300704c21fc7556db
	$image = array();
	$con = con();
	$query=$con->query("select * from evento_estudiante_foto where evento_estudiante_foto_idestudiante=$id");
	while($r=$query->fetch_object()){
		$image[] = $r;
<<<<<<< HEAD
=======
=======
	$image = null;
	$con = con();
	$query=$con->query("select * from evento_estudiante_foto where id=$id");
	while($r=$query->fetch_object()){
		$image = $r;
>>>>>>> 43499fa378594a806cae9a7e6a59080eef00287d
>>>>>>> 1308092b8f21de9c4967c89300704c21fc7556db
	}
	return $image;
}

function get_validar($v,$id){
	$con = con();
<<<<<<< HEAD
	$query=$con->query("UPDATE evento_estudiante_foto SET  valido =$v WHERE evento_estudiante_foto_idestudiante =$id");  /*update image set valido=$v where id=39");*/
=======
<<<<<<< HEAD
	$query=$con->query("UPDATE evento_estudiante_foto SET  valido =$v WHERE evento_estudiante_foto_idestudiante =$id");  /*update image set valido=$v where id=39");*/
=======
	$query=$con->query("UPDATE evento_estudiante_foto SET  valido =$v WHERE id =$id");  /*update image set valido=$v where id=39");*/
>>>>>>> 43499fa378594a806cae9a7e6a59080eef00287d
>>>>>>> 1308092b8f21de9c4967c89300704c21fc7556db
	
}

function del($id){
	$con = con();
	$con->query("delete from evento_estudiante_foto where id=$id");
}

?>
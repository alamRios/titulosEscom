<?php
    session_start();
    include("configbd.php");
    include("getPosts.php");

    $dusr_pass = md5($usr_pass);

    $sqlAcc = "select idusuario, isnull(idestudiante) tipoUsr from usuario left join estudiante on idusuario = estudiante_boleta WHERE idusuario='$usr_boleta' AND usuario_pass='$dusr_pass'";

    $resAcc = mysql_query($sqlAcc,$conn) or die ('Consulta fallida');

    if($row = mysql_fetch_array($resAcc)){
            $_SESSION["usr_tipo"]=$row["tipoUsr"];
            $_SESSION["usr_id"]=$row["idusuario"];
            echo 1; 
    }else{
            echo 0;
    }
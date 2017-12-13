<?php

$conexion=new mysqli("localhost","root","","escomtitulos");
 if($conexion){
echo "exitosa";
}
else{
echo "no exitosa";

}

?>
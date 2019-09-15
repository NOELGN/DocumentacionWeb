<?php
$servidor="localhost"; //127.0.0.1
$usuario="root";
$contrasenia="";
$bd="sombrilla";

$conectar= mysqli_connect($servidor,$usuario,$contrasenia,$bd) or die("Problemas al conectar con el servidor");//establecer la conexion

/*if($conectar = true){
    echo "conecto";
}elseif($conectar = false){
    echo "no conecto";
}*/
?>
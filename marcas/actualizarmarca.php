<?php
    $marca=$_GET["numMarca"];
    $statusmarca=$_GET["statusMarca"];

    include("../conexion/conexion.php");
    if($statusmarca==1){
        $consulta="UPDATE marca SET statusMarca='0' WHERE idMarca = $marca;";
    }else if($statusmarca==0){
        $consulta="UPDATE marca SET statusMarca='1' WHERE idMarca = $marca;";
    }
    $ejeConsulta=mysqli_query($conectar,$consulta);

    

    mysqli_close($conectar);

    header("location:../index.php");
?>
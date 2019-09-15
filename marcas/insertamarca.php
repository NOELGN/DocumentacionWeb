<?php
    $marca = $_POST["txtmarca"];

    include("../conexion/conexion.php");
    $consulta="INSERT marca VALUES(null,'$marca',1)";
    $ejeConsulta=mysqli_query($conectar,$consulta);

    mysqli_close($conectar);

    header("location:../index.php");
?>
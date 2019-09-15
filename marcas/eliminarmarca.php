<?php
    $marca=$_GET["numMarca"];

    include("../conexion/conexion.php");
    $consulta="DELETE FROM marca WHERE idMarca = $marca;";
    $ejeConsulta=mysqli_query($conectar,$consulta);

    

    mysqli_close($conectar);

    header("location:../index.php");
?>
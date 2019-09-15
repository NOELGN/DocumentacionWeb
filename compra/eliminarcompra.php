<?php
    $idCompra=$_GET["idCompra"];

    include("../conexion/conexion.php");
    $consulta="DELETE FROM carritocompra WHERE idcarritoCompra = $idCompra;";
    $ejeConsulta=mysqli_query($conectar,$consulta);

    

    mysqli_close($conectar);

    header("location:../services.php");
?>
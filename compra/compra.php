<?php
session_start();
    $idProducto=$_GET["numProducto"];
    $idUsuario=$_SESSION["Usuario"];

    

    //sacar el precio de la compra
    include("../conexion/conexion.php");
    $consulta2="SELECT precio FROM producto where idProducto = $idProducto;";
    $ejeConsulta2=mysqli_query($conectar,$consulta2);

    while ($regPrecio = mysqli_fetch_assoc($ejeConsulta2)) {
        $precioProducto = $regPrecio["precio"]; 
    }

    mysqli_close($conectar);
    //mostrar los productos en la web de productos
     

    include("../conexion/conexion.php");
    $consulta="INSERT carritocompra VALUES(null,$precioProducto,NOW(),1,$idProducto,$idUsuario);";
    $ejeConsulta=mysqli_query($conectar,$consulta);

    mysqli_close($conectar);

    header("location:../services.php");

?>
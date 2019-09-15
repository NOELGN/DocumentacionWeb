<?php
    $sss=$_GET["usuario"];

    
    include("../conexion/conexion.php");
    $consulta2="SELECT
    SUM(carritocompra.precioProducto)as totalCompra,
    SUM(carritocompra.cantidad)as cantidadtotal
    FROM
    carritocompra
    WHERE
    carritocompra.idUsuario=1 ;";

    $ejeConsulta2=mysqli_query($conectar,$consulta2);

    while ($regVenta = mysqli_fetch_assoc($ejeConsulta2)) {
     
        $totalcompra= $regVenta[totalCompra]; 
        $cantidadtotal= $regVenta[cantidadtotal]; 

    }

    $consulta3="SELECT  
    carritocompra.fecha as fecha
    FROM
    carritocompra
    WHERE
    carritocompra.idUsuario=1 LIMIT 1;";

    $ejeConsulta3=mysqli_query($conectar,$consulta3);

    while ($regVenta2 = mysqli_fetch_assoc($ejeConsulta3)) {
 
    $fecha = $regVenta2[fecha]; 
    }

    $consulta4="INSERT venta VALUES(null,$totalcompra,'$fecha',$cantidadtotal,null,$sss)";
    $ejeConsulta4=mysqli_query($conectar,$consulta4);

    mysqli_close($conectar);

    echo "se Realizo su compra ";

    echo "<a href='../services.php' class='btn btn-primary'> Regresar</a>";

                
?>
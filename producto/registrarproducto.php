<?php
    $nombrep=$_POST["txtnombreproducto"];
    $descripcionp=$_POST["txtdescproducto"];
    $marca=$_POST["selectMarca"];
    $precio=$_POST["txtprecio"];
    $imagen=$_POST["txturl"];

    include("../conexion/conexion.php");
    $consulta="INSERT producto VALUES(null,'$nombrep','$descripcionp',$precio,'$imagen',$marca);";
    $ejeConsulta=mysqli_query($conectar,$consulta);

    mysqli_close($conectar);

    header("location:producto.php");






?>
<?php
    $nombre=$_POST["txtnombre"];
    $apellidos=$_POST["txtapellidos"];
    $email=$_POST["txtemail"];
    $telefono=$_POST["txttelefono"];
    $contrasena=$_POST["txtcontrasena"];
    $tipoCliente=$_POST["tipocliente"];
    
    include("../conexion/conexion.php");
    $consulta="INSERT usuario VALUES(null,'$nombre','$apellidos','$email','$telefono','$contrasena','',$tipoCliente);";
    $ejeConsulta=mysqli_query($conectar,$consulta);

    mysqli_close($conectar);

    header("location:registrar.php");

?>
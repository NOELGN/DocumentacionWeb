<?php
session_start();
session_destroy();
?>
<?php

    include ("../conexion/conexion.php");

    $user = $_POST["txtemail"];
    $pass = $_POST["txtPassword"];

    //echo "$user,$pass";

    //echo "$user,$pass";
    $consulta="SELECT * FROM usuario WHERE usuario.email = '$user'
    AND usuario.contrasena='$pass';";

    $ejeconsulta = mysqli_query($conectar,$consulta);
    //extraer los datos
    $registroUsuario=mysqli_fetch_assoc($ejeconsulta);

    //echo "datos desde la base de datos ".$registroUsuario["email"].$registroUsuario["contrasena"];

    if($registroUsuario["email"]==$user && $registroUsuario["contrasena"] == $pass){
        session_start();
        $_SESSION["usuario"] = $registroUsuario["nombre"];
        $_SESSION["rol"] = $registroUsuario["idRol"];
        $_SESSION["Usuario"] = $registroUsuario["idUsuario"];
        //$_SESSION["Foto"] = $registroUsuario["foto"];

        //redirreccionar al index principal producto
        header("location:../producto/producto.php");
    }else{
        echo "datos incorrectos vuelva a intentar";
        echo "<br><a href='autentificar.php'>volver a intentar</a>";
    }
?>
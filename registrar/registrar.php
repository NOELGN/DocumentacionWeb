<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Corlate</title>

    <!-- core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/owl.carousel.min.css" rel="stylesheet">
    <link href="../css/icomoon.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="../images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
    <header>
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div id="saltar">
                        <a class="navbar-brand" href="index.php"><img src="../images/logo1.png" alt="logo"></a>
                    </div>
                    <div id="saltar">
                        <h1> Sombrillas</h1>
                    </div>

                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="../index.php">inicio</a></li>
                        <li><a href="../sobrenosotros.html">sobre nosotros</a></li>
                        <li><a href="../services.php">carrito compras</a></li>
                        <li><a href="../producto/producto.php">producto</a></li>
                        <li><a href="registrar.php">registrar</a></li>
                        <li class="active"><a href="../iniciarsesion.html">iniciar sesion</a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

    </header>
    <!--/header-->


    <div class="page-title" style="background-image: url(../images/page-title.png)">
        <h1>Registrarse</h1>
    </div>

    <?php
  if(isset($_SESSION["usuario"])){
    echo "Usuario:".$_SESSION["usuario"];
    if($_SESSION["rol"] == 2){

?>


    <form action="registrarusuario.php" method="POST">
        <section id="contact-page">
            <div class="container">
                <div class="large-title text-center">
                    <h2>beneficios de ser usuario</h2>
                    <p>descuentos en compras // envios mas rapidos<br> notificacion sobre producto de tu interez</p>
                </div>
                <div class="row contact-wrap">
                    <div class="status alert alert-success" style="display: none"></div>
                    <form id="main-contact-form" class="contact-form" name="contact-form" method="post"
                        action="sendemail.php">
                        <div class="col-sm-5 col-sm-offset-1">

                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" name="txtnombre" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>apellidos</label>
                                <input type="text" name="txtapellidos" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="email" name="txtemail" class="form-control" required="required">
                            </div>

                        </div>

                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Telefono</label>
                                <input type="number" name="txttelefono" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>contraseña *</label>
                                <input type="password" name="txtcontrasena" class="form-control" required="required">
                            </div>

                            <label>Seleccione tipo de cuenta</label>
                            <select class="form-control" name="tipocliente" id="inlineFormCustomSelectPref"
                                required="required">
                                <?php
                            include("../conexion/conexion.php");
                            $consulta = "SELECT * FROM rol;";
                            $ejeConsulta = mysqli_query($conectar, $consulta);
                            while ($regMarcas = mysqli_fetch_assoc($ejeConsulta)) {
                                echo "<option value='" . $regMarcas["idRol"] . "' >" . $regMarcas["nombreRol"] . "</option>";
                            }
                            ?>
                            </select>

                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary btn-lg"
                                    required="required">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </section>
        <!--/#contact-page-->
    </form>


    <?php
}if($_SESSION["rol"] == 1){
    echo "<h1>debes ser administrador para registrar usuario</h1>";
?>
<?php      
    }
  }else{
    echo "Debe <a href='../iniciarsesion.html'>Iniciar Sesion</a>";
  }
?>
    <!--footer-->
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2019 <a target="_blank" href="http://shapebootstrap.net/"
                        title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All
                    Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li style="color: #EC5538" class="collapse navbar-collapse navbar-right"><a href="../login/cerrarsesion.php">cerrar sesion</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->



    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.isotope.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>
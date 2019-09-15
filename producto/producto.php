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
    <title>Home | SuperSombrillas</title>

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
                        <li><a href="producto.php">producto</a></li>
                        <li><a href="../registrar/registrar.php">registrar</a></li>
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
        <h1>Productos</h1>
    </div>

    <?php
    if (isset($_SESSION["usuario"])) {
        echo "<img src='../" . $_SESSION["Foto"] . "' width='25' height='25' >";
        echo "Usuario:" . $_SESSION["usuario"];
        //echo "id usuario".$_SESSION["Usuario"];
        if ($_SESSION["rol"] == 2) {

            ?>


            <section id="portfolio">
                <div class="container">
                    <div class="center">
                        <h2>sobrillas para la tempotada de lluvias</h2>

                    </div>


                    <form action="registrarproducto.php" method="POST">
                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group">
                                <label>Nombre producto</label>
                                <input type="text" name="txtnombreproducto" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>descripcion del producto</label>
                                <input type="text" name="txtdescproducto" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>precio</label>
                                <input type="number" name="txtprecio" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Seleccione Marca</label>
                                <select class="form-control" name="selectMarca" id="inlineFormCustomSelectPref" required="required">
                                    <?php
                                    include("../conexion/conexion.php");
                                    $consulta = "SELECT * FROM marca;";
                                    $ejeConsulta = mysqli_query($conectar, $consulta);
                                    while ($regMarcas = mysqli_fetch_assoc($ejeConsulta)) {
                                        echo "<option value='" . $regMarcas["idMarca"] . "' >" . $regMarcas["descripcionMarca"] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Seleccione una imagen para su cuenta</label>
                                <div><input type="file" class="form-control" name="txturl"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Registrar
                                    Producto</button>
                            </div>
                        </div>

                    </form>

                </div>
                </div>


                <div class="center">
                    <h2>nuestros Productos</h2>

                </div>
                </div>
            </section>


            <!--/#portfolio-item-->

            <!--productos-->
            <div class="container">
                <div class="row">
                    <?php
                    include("../conexion/conexion.php"); #abrir la conexion 
                    $consulta = "SELECT * FROM producto;";
                    $ejeConsulta = mysqli_query($conectar, $consulta); #extraer los datos en un array 
                    while ($regPro = mysqli_fetch_assoc($ejeConsulta)) { #extrae datos de consulta y los guarda en regmarcas y mientras este sea verdadero te mandara un true en caso que ya no exista un registro te mandara un false
                        #Prioridad las comillas simples ya que si se dejan las doble comilla al row mostrara error
                        //imprime un registro
                        ?>


                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <img src="../images/producto/<?php echo "$regPro[imagen]"; ?>" class="card-img-top" alt="..." width='220' height='300'>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo "$regPro[nombreProducto]"; ?></h5>
                                    <p class="card-text"><?php echo "$regPro[descripcionProducto]" ?></p>
                                    <p style="color: rgb(76, 0, 255);">precio:$ <?php echo "$regPro[precio]" ?> </p>
                                    <?php
                                    echo "<a href='../compra/compra.php?numProducto=" . $regPro[idProducto] . "' class='btn btn-primary'>comprar</a>";
                                    ?>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>


                    <?php

                }
                ?>
                </div>
            </div>
            <?php
            mysqli_close($conectar);
            ?>
            <!--fin prodintps-->

        <?php
    }
    if ($_SESSION["rol"] == 1) {
        ?>
            <section id="portfolio">
                <div class="container">
                    <div class="center">
                        <h2>nuestros Productos</h2>

                    </div>
                </div>
            </section>
            <!--productos-->
            <div class="container">
                <div class="row">
                    <?php
                    include("../conexion/conexion.php"); #abrir la conexion 
                    $consulta = "SELECT * FROM producto;";
                    $ejeConsulta = mysqli_query($conectar, $consulta); #extraer los datos en un array 
                    while ($regPro = mysqli_fetch_assoc($ejeConsulta)) { #extrae datos de consulta y los guarda en regmarcas y mientras este sea verdadero te mandara un true en caso que ya no exista un registro te mandara un false
                        #Prioridad las comillas simples ya que si se dejan las doble comilla al row mostrara error
                        //imprime un registro
                        ?>


                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <img src="../images/producto/<?php echo "$regPro[imagen]"; ?>" class="card-img-top" alt="..." width='220' height='300'>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo "$regPro[nombreProducto]"; ?></h5>
                                    <p class="card-text"><?php echo "$regPro[descripcionProducto]" ?></p>
                                    <p style="color: rgb(76, 0, 255);">precio:$ <?php echo "$regPro[precio]" ?> </p>
                                    <?php
                                    echo "<a href='../compra/compra.php?numProducto=" . $regPro[idProducto] . "' class='btn btn-primary'>comprar</a>";
                                    ?>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>


                    <?php

                }
                ?>
                </div>
            </div>
            <?php
            mysqli_close($conectar);
            ?>
            <!--fin prodintps-->
        <?php
    }
} else {
    echo "Debe <a href='../iniciarsesion.html'>Iniciar Sesion</a>";
}
?>




    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2019 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All
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
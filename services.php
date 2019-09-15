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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/icomoon.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
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
                                    <a class="navbar-brand" href="index.php"><img src="images/logo1.png" alt="logo"></a>
                            </div>
                            <div id="saltar">
                                    <h1> Sombrillas</h1>
                            </div>
                            
                        </div>
        
                        <div class="collapse navbar-collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li><a href="index.php">inicio</a></li>
                                <li><a href="sobrenosotros.html">sobre nosotros</a></li>
                                <li><a href="services.php">carrito compras</a></li>
                                <li><a href="producto/producto.php">producto</a></li>
                                <li class="active"><a href="registrar/registrar.php">registrar</a></li>
                                <li class="active"><a href="iniciarsesion.html">iniciar sesion</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/.container-->
                </nav>
                <!--/nav-->
        
            </header>
            <!--/header-->


    <div class="page-title" style="background-image: url(images/page-title.png)">
        <h1>carrito compras</h1>
    </div>
    
    <?php
  if(isset($_SESSION["usuario"])){
    //echo "<img src='../".$_SESSION["Foto"]."' width='25' height='25' >";
    echo "Usuario:".$_SESSION["usuario"];
    //echo "id usuario".$_SESSION["Usuario"];
    $idsss= $_SESSION["Usuario"];
    if($_SESSION["rol"] == 2){

    ?>
<section id="services" class="service-item">
        <div class="container">
            <div class="center fadeInDown">
                <h2>productos Vendidos</h2>
                <p class="lead"> </p>
            </div>

            <!--productos-->
            <div class="container">
                <div class="row">
                    <?php

                    $idUsuario=$_SESSION["Usuario"];
                    include ("conexion/conexion.php"); #abrir la conexion 
                    $consulta="SELECT
                    venta.totalVenta,
                    venta.fechaVenta,
                    venta.cantidad,
                    venta.idUsuario,
                    usuario.nombre,
                    usuario.apellidos,
                    usuario.email,
                    usuario.telefono
                    FROM
                    venta
                    INNER JOIN usuario ON venta.idUsuario = usuario.idUsuario
                    ;";
                    $ejeConsulta=mysqli_query($conectar,$consulta);#extraer los datos en un array 
                    while ($regCompra=mysqli_fetch_assoc($ejeConsulta)) { #extrae datos de consulta y los guarda en regmarcas y mientras este sea verdadero te mandara un true en caso que ya no exista un registro te mandara un false
                    #Prioridad las comillas simples ya que si se dejan las doble comilla al row mostrara error
                    //imprime un registro
                    ?>


                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">se vendieron <?php echo "$regCompra[cantidad]"; ?> sombrillas</h5>
                                <p class="card-text">total de la venta $<?php echo "$regCompra[totalVenta]";?></p>
                                <p class="card-text">usuario: <?php echo "$regCompra[nombre] "."$regCompra[apellidos]"." ";?></p>
                                <p style="color: rgb(76, 0, 255);">email <?php echo "$regCompra[email]";?> <br>telefono: <?php echo "$regCompra[telefono]";?> <br> fechaVenta: <?php echo "$regCompra[fechaVenta]";?> </p>
                                <a href="#" class="btn btn-primary">leer mas..</a>
                                <?php
                                ?>
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



            <div class="center fadeInDown">
                <h2>beneficios</h2>
                <p class="lead">total <br> a todas las partes del mundo</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/ux.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Compras en linea</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/web.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Descuentos</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/motion.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">100% de calidad en nuestros productos</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/mobile-ui.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">diseños innovadores</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/web-app.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Estrategia de negocio</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/mobile-ui.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">accesible</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.row-->


        </div>
        <!--/.container-->
    </section>
    <!--/#services-->
    <?php
}if($_SESSION["rol"] == 1){
?>
<section id="services" class="service-item">
        <div class="container">
            <div class="center fadeInDown">
                <h2>productos Comprados</h2>
                <p class="lead"> </p>
            </div>

            <!--productos-->
            <div class="container">
                <div class="row">
                    <?php

                    $idUsuario=$_SESSION["Usuario"];
                    include ("conexion/conexion.php"); #abrir la conexion 
                    $consulta="SELECT
                    carritocompra.idcarritoCompra,
                    carritocompra.precioProducto,
                    carritocompra.fecha,
                    carritocompra.cantidad,
                    producto.nombreProducto,
                    producto.descripcionProducto,
                    producto.imagen,
                    producto.precio,
                    usuario.nombre,
                    usuario.apellidos
                    FROM
                    carritocompra
                    INNER JOIN producto ON producto.idProducto=carritocompra.idProducto
                    INNER JOIN usuario ON usuario.idUsuario=carritocompra.idUsuario
                    WHERE carritocompra.idUsuario=$idUsuario";
                    $ejeConsulta=mysqli_query($conectar,$consulta);#extraer los datos en un array 
                    while ($regCompra=mysqli_fetch_assoc($ejeConsulta)) { #extrae datos de consulta y los guarda en regmarcas y mientras este sea verdadero te mandara un true en caso que ya no exista un registro te mandara un false
                    #Prioridad las comillas simples ya que si se dejan las doble comilla al row mostrara error
                    //imprime un registro
                    ?>


                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <img src="images/producto/<?php echo "$regCompra[imagen]";?>" class="card-img-top" alt="..."
                                width='220' height='300'>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo "$regCompra[nombreProducto]"; ?></h5>
                                <p class="card-text"><?php echo "$regCompra[descripcionProducto]";?></p>
                                <p style="color: rgb(76, 0, 255);">precio:$ <?php echo "$regCompra[precio]";?> fecha: <?php echo "$regCompra[fecha]";?> <br> cantidad: <?php echo "$regCompra[cantidad]";?> </p>
                                <a href="#" class="btn btn-primary">comprado</a>
                                <?php
                                echo "<a href='compra/eliminarcompra.php?idCompra=".$regCompra[idcarritoCompra]."' class='btn btn-primary'>Eliminar comprar</a>";
                                ?>
                            </div>
                        </div>
                    </div>


                    <?php

                    }
                    ?>
                </div>
            </div>

            <br>
            <br>   
            <section class="center fadeInDown">
            <?php
            echo "<a href='compra/venta.php?usuario=" . $idsss . "' class='btn btn-primary'>Finalizar Comprar</a>";
            ?>
            </section>
            <?php
             mysqli_close($conectar);
            ?>
            <!--fin prodintps-->
            <!--inicia la venta real--->
            <?php
            
            
            ?>
            <!---fon de la venta-->


            <div class="center fadeInDown">
                <h2>beneficios</h2>
                <p class="lead">nos dedicamos a vender sombrillas desde una web <br> a todas las partes del mundo</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/ux.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Compras en linea</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/web.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Descuentos</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/motion.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">100% de calidad en nuestros productos</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/mobile-ui.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">diseños innovadores</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/web-app.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Estrategia de negocio</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/mobile-ui.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">accesible</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.row-->


        </div>
        <!--/.container-->
    </section>
    <!--/#services-->

<?php      
    }
  }else{
    echo "Debe <a href='../iniciarsesion.html'>Iniciar Sesion</a>";
  }
?>

        
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
                        <li style="color: #EC5538" class="collapse navbar-collapse navbar-right"><a href="login/cerrarsesion.php">cerrar sesion</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

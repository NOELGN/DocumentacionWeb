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

<body class="homepage">
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
    <!--///////////////////////////////77-->

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item" style="background-image: url(images/whats.png)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Super Sombrillas</h1>
                                    <div class="animation animated-item-2">
                                        adquiere una de nuestras sombillas en la puerta de tu casa
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.item-->

                <div class="item active" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Compra Online</h1>
                                    <div class="animation animated-item-2">
                                        compra desde tu hogar
                                    </div>
                                    <a class="btn-slide animation animated-item-3" href="producto/producto.php">ver todos productos</a>
                                    <a class="btn-slide white animation animated-item-3" href="registrar/registrar.php">registrarse</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item" style="background-image: url(images/tab-video-bg.png)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Preparate para las lluvias</h1>
                                    <div class="animation animated-item-2">

                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
        <a class="prev hidden-xs hidden-sm" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs hidden-sm" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>

    <?php
  if(isset($_SESSION["usuario"])){
    //echo "<img src='../".$_SESSION["Foto"]."' width='25' height='25' >";
    echo "Usuario:".$_SESSION["usuario"];
    //echo "id usuario".$_SESSION["Usuario"];
    if($_SESSION["rol"] == 2){

?>

    <section id="recent-works">
        <div class="container">
            <div class="center fadeInDown">
                <h2>nuestros productos</h2>
                <p class="lead">adquire unos de nuestros productos <br> no lo pienses mas ...</p>
            </div>

            <!--productos-->
            <div class="container">
                <div class="row">
                    <?php
                    include("conexion/conexion.php"); #abrir la conexion 
                    $consulta = "SELECT * FROM producto;";
                    $ejeConsulta = mysqli_query($conectar, $consulta); #extraer los datos en un array 
                    while ($regPro = mysqli_fetch_assoc($ejeConsulta)) { #extrae datos de consulta y los guarda en regmarcas y mientras este sea verdadero te mandara un true en caso que ya no exista un registro te mandara un false
                        #Prioridad las comillas simples ya que si se dejan las doble comilla al row mostrara error
                        //imprime un registro
                        ?>


                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <img src="images/producto/<?php echo "$regPro[imagen]"; ?>" class="card-img-top" alt="..." width='220' height='300'>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo "$regPro[nombreProducto]"; ?></h5>
                                    <p class="card-text"><?php echo "$regPro[descripcionProducto]"; ?></p>
                                    <p style="color: rgb(76, 0, 255);">precio:$ <?php echo "$regPro[precio]"; ?> </p>
                                    
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
                <br>
                <br>
                <h2>nuestras marcas</h2>
            </div>
            <!--insertar marca-->
            <form action="marcas/insertamarca.php" method="POST">

                <div class="form-group">
                    <label>nombre marca</label>
                    <input type="text" name="txtmarca" class="form-control" required="required">
                </div>

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">guardar marca</button>
                </div>

            </form>

            <!--tabla-->
            <section class="mt-3">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Descripcion Marca</th>
                            <th scope="col">Estatus</th>
                            <th scope="col">Actualizar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("conexion/conexion.php"); #abrir la conexion 
                        $consulta = "SELECT * FROM marca";
                        $ejeConsulta = mysqli_query($conectar, $consulta); #extraer los datos en un array 
                        while ($regMarcas = mysqli_fetch_assoc($ejeConsulta)) { #extrae datos de consulta y los guarda en regmarcas y mientras este sea verdadero te mandara un true en caso que ya no exista un registro te mandara un false

                            if ($regMarcas["statusMarca"] == '1') {
                                $imagen = "images/y.1.png";
                                $palabra = "activo";
                            } else {
                                $imagen = "images/x.1.png";
                                $palabra = "inactivo";
                            }
                            #Prioridad las comillas simples ya que si se dejan las doble comilla al row mostrara error
                            //imprime un registro
                            echo "<tr> 
      <th scope=>" . $regMarcas[idMarca] . "</th>
      <td>" . $regMarcas[descripcionMarca] . "</td>
      <td><img src='$imagen' data-toggle='tooltip' title='$palabra' width='25' height='25' ></td>
      <td><a href='marcas/actualizarmarca.php?numMarca=" . $regMarcas[idMarca] . "&statusMarca=".$regMarcas[statusMarca]."'><img src='images/actualizar.1.png' width='25' height='25' ></a></td>
      <td><a href='marcas/eliminarmarca.php?numMarca=" . $regMarcas[idMarca] . "'><img src='images/borrar.1.jpeg' width='25' height='25' ></a></td>
    </tr>";
                        }

                        ?>
                    </tbody>
                </table>

                <?php
                mysqli_close($conectar);
                ?>

            </section>
        </div>
        <!--/.container-->
    </section>
    <!--/#recent-works-->
    <?php
    }if($_SESSION["rol"] == 1){
    ?>
    <section id="recent-works">
        <div class="container">
            <div class="center fadeInDown">
                <h2>nuestros productos</h2>
                <p class="lead">adquire unos de nuestros productos <br> no lo pienses mas ...</p>
            </div>

            <!--productos-->
            <div class="container">
                <div class="row">
                    <?php
                    include("conexion/conexion.php"); #abrir la conexion 
                    $consulta = "SELECT * FROM producto;";
                    $ejeConsulta = mysqli_query($conectar, $consulta); #extraer los datos en un array 
                    while ($regPro = mysqli_fetch_assoc($ejeConsulta)) { #extrae datos de consulta y los guarda en regmarcas y mientras este sea verdadero te mandara un true en caso que ya no exista un registro te mandara un false
                        #Prioridad las comillas simples ya que si se dejan las doble comilla al row mostrara error
                        //imprime un registro
                        ?>


                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <img src="images/producto/<?php echo "$regPro[imagen]"; ?>" class="card-img-top" alt="..." width='220' height='300'>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo "$regPro[nombreProducto]"; ?></h5>
                                    <p class="card-text"><?php echo "$regPro[descripcionProducto]"; ?></p>
                                    <p style="color: rgb(76, 0, 255);">precio:$ <?php echo "$regPro[precio]"; ?> </p>
                                   
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
                <br>
                <br>
                <h2>nuestras marcas</h2>
            </div>

            <!--tabla-->
            <section class="mt-3">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Descripcion Marca</th>
                            <th scope="col">activos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("conexion/conexion.php"); #abrir la conexion 
                        $consulta = "SELECT * FROM marca";
                        $ejeConsulta = mysqli_query($conectar, $consulta); #extraer los datos en un array 
                        while ($regMarcas = mysqli_fetch_assoc($ejeConsulta)) { #extrae datos de consulta y los guarda en regmarcas y mientras este sea verdadero te mandara un true en caso que ya no exista un registro te mandara un false

                            if ($regMarcas["statusMarca"] == '1') {
                                $imagen = "images/y.1.png";
                                $palabra = "activo";
                            } else {
                                $imagen = "images/x.1.png";
                                $palabra = "inactivo";
                            }
                            #Prioridad las comillas simples ya que si se dejan las doble comilla al row mostrara error
                            //imprime un registro
                            echo "<tr> 
      <th scope=>" . $regMarcas[idMarca] . "</th>
      <td>" . $regMarcas[descripcionMarca] . "</td>
      <td><img src='$imagen' data-toggle='tooltip' title='$palabra' width='25' height='25' ></td>
    </tr>";
                        }

                        ?>
                    </tbody>
                </table>

                <?php
                mysqli_close($conectar);
                ?>

            </section>
        </div>
        <!--/.container-->
    </section>




    <section id="testimonial">
        <div class="container">
            <div class="center fadeInDown">
                <h2>comentarios</h2>
                <p class="lead">comentarios de todos los que han sido nuestro clientes <br> experiencia de compra</p>
            </div>
            <div class="testimonial-slider owl-carousel">
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images/client1.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference
                            in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images/client2.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference
                            in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images/client3.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference
                            in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images/client2.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference
                            in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images/client1.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference
                            in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images/client3.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference
                            in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php      
    }
  }else{
    echo "Debe <a href='iniciarsesion.html'>Iniciar Sesion</a>";
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
                        <li style="color: #EC5538" class="collapse navbar-collapse navbar-right"><a href="login/cerrarsesion.php">cerrar sesion</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <!--rutas y si gala-->

    <!--fin ruta-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>

    

</body>
</html>


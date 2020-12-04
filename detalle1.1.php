<!doctype html>

<html lang="en">

<head>
    <style>
        footer {
          text-align: center;
          padding: 3px;
          background-color:Black;
        }
        </style>
    <meta charset="utf-8">
    <title>CPS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="assets/img/icon.png" rel="icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/venobox/venobox.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <!-- Nivo Slider Theme -->
    <link href="assets/css/nivo-slider-theme.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="assets/css/responsive.css" rel="stylesheet">


</head>

<body data-spy="scroll" data-target="#navbar-example">

    <div id="preloader"></div>

    <header>
        <!-- header-area start -->
        <div id="sticker" class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">

                        <!-- Navigation -->
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll sticky-logo" href="principal.html">
                                    <h1><span>Computer</span>Part Service</h1>
                                    <!-- Uncomment below if you prefer to use an image logo -->
                                    <!-- <img src="img/logo.png" alt="" title=""> -->
                                </a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                                <ul class="nav navbar-nav navbar-right">
                                     
                                    <li>
                                        <a class="page-scroll" href="catalogo.html">Catalogo</a>
                                    </li>
                                  

                                </ul>
                            </div>
                            <!-- navbar-collapse -->
                        </nav>
                        <!-- END: Navigation -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-area end -->
    </header>
    <!-- header end -->
    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/venobox/venobox.min.js"></script>
    <script src="lib/knob/jquery.knob.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/parallax/parallax.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="lib/appear/jquery.appear.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <script src="assets/js/main.js"></script>



    <!-- Start portfolio Area -->

    <div id="about" class="portfolio-area area-padding fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Detalle del producto:</h2>
                    </div>
                </div>
            </div>
            <div class="row">


              <!-- single-awesome-project start -->
              <div class="col-md-4 col-sm-4 col-xs-12 design">
                <div class="single-awesome-project">
                    <div class="awesome-img">
                        <a href="principal.html"><img src="assets/img/portfolio/4.png" alt="" /></a>
                        <div class="add-actions text-center">
                            <div class="project-dec">
                                <a class="venobox" data-gall="myGallery" href="principal.html">
                                    <h4>HyperX FURY Red</h4>
                                    <span>Red DDR3, 1600MHz, 8GB, Non-ECC, CL10</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
     
     include('assets/data/conexion.php');
       
     $obj = new Conexion;
   
     $res = $obj->buscarProducto();
   
     $temp = array();
   
   $temp = $res;
   
   
   
   print("idPro:  " . $temp[6]['nombre_producto'] . '<br>');
   print("Nombre: " . $temp[6]['descripcion_producto'] . '<br>');
   print("Precio_Venta: " . $temp[6]['precio_venta'] . '<br>');
   //print("url_img: " . $temp[0]['url_img'] . '<br>');
   
   
   ?>

    
        

                </div>
            </div>
        </div>
    </div>
    <!-- awesome-portfolio end -->




 <!-- Footer -->

 <footer>
    

    <div class="search-text"> 
          <div class="container">
              <div class="row text-center">
                  
  <div class="form">
      <br>
  <center><h4 style="color:white";>Computer-PartService</h4></center>
     <div class="container-footer-all">
      <div class="container-body">
          <div class="colum1">
      
         
      </div>
  </div>
      <div class="container-footer">
          
     <div class="information">
   </p> Privacidad y Politica |
       Terminos y Condiciones</p>
  
  </div>
      </div>
  </div>
  </footer>


<!--Fin Footer-->
    
    </div>
    </div>
    </div>
    <!-- End Contact Area -->
    <script 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/registrarContacto.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vinculación TecNM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
    
    
  <!-- Conexion -->  
  <?php include_once 'admin/includes/config.php' ?>


<!-- Extras, Extras-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Extras-->


  <!-- Favicons prueba -->
  <link href="assets/img/vinculacion.svg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts, esto lo modifique por segunda vez para ver que git siga bien despues de un cambio que hice -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="difusion@itmorelia.edu.mx">difusion@itmorelia.edu.mx</a>
        <i class="icofont-phone"></i> +52 (443) 312 1570
      </div>
      <div class="social-links">
        <a href="https://twitter.com/itmoficial" class="twitter" target="_blank"><i class="icofont-twitter"></i></a>
        <a href="https://www.facebook.com/ITMoreliaOficial" class="facebook" target="_blank"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/tecnm_campus_morelia/" class="instagram" target="_blank"><i class="icofont-instagram"></i></a>
        
      </div>
    </div>
  </div>
<!-- ======= Top Bar end ======= -->

<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <img src="assets/img/anfei.png" alt="" width="100" height="100" />
      <h1 class="logo mr-auto"><a href="index.html">VINCULACION ITM</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#inicio">Inicio</a></li>
          <li><a href="#noticias">Noticias</a></li>
          <li><a href="#testimonials">Testimonios</a></li>
          <li><a href="#nosotros">Nosotros</a></li>
          <li><a href="#reportes">Reportes</a></li>
          <li><a href="#encuestas">Colabora</a></li>
          <li><a href="#contacto">Contacto</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  
  <?php
    $slides=["","","","",];
    $text=["","","","",];
    $cont=0;
    if ($resultado = mysqli_query($link, "SELECT * FROM slides ")) {
    while($rows=mysqli_fetch_array($resultado)){
        $slides[$cont]=$rows[1];
        $text[$cont]=$rows[2];
        $cont++;
    }
    mysqli_free_result($resultado);
    
}?>
  
  <main id="main">
    <!-- Inicia la bienvenida-->
    
    <section id="inicio" class="inicio">
      <div class="container">
        
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="<?php echo $slides[0] ?>" alt="Los Angeles" style="width:100%;">
            </div>
      
            <div class="item">
              <img src="<?php echo $slides[1] ?>" alt="Chicago" style="width:100%;">
            </div>
          
            <div class="item">
              <img src="<?php echo $slides[2] ?>" alt="New york" style="width:100%;">
            </div>
            <div class="item">
              <img src="<?php echo $slides[3] ?>" alt="New york" style="width:100%;">
            </div>
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section><!--Fin de la bienvenida -->

       <!-- ======= Inicio noticias ======= -->
       <section id="noticias" class="noticias section-bg">
      

    
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 id="tNoticia"><a data-toggle="modal" data-target="#exampleModalCenter">Pony New</a></h4>
              <p>Alumnos de Sistemas Computacionales, entre los mejores del pais</p>
              <p id="lMas" data-toggle="modal" data-target="#exampleModalCenter">LEER MAS</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 id="tNoticia"><a data-toggle="modal" data-target="#exampleModalCenter2">Suspension de clases</a></h4>
              <p>Se ha tomado la medida drastica de suspender todas las clases ya sean en su modalidad presencial tanto como en su modalidad en linea....</p>
              <p id="lMas" data-toggle="modal" data-target="#exampleModalCenter2">LEER MAS</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 id="tNoticia"><a data-toggle="modal" data-target="#exampleModalCenter2">PonyFest la estafa del siglo</a></h4>
              <p>Varios alumnos del Instituto Tecnologico de Morelia han declarado que a dia de hoy no han obtenido un reembolso.....</p>
              <p id="lMas" data-toggle="modal" data-target="#exampleModalCenter2">LEER MAS</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 id="tNoticia"><a data-toggle="modal" data-target="#exampleModalCenter2">Noticia generica</a></h4>
              <p id="lMas" data-toggle="modal" data-target="#exampleModalCenter2">LEER MAS</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 id="tNoticia"><a data-toggle="modal" data-target="#exampleModalCenter2">Noticia generica</a></h4>
              <p id="lMas" data-toggle="modal" data-target="#exampleModalCenter2">LEER MAS</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 id="tNoticia"><a data-toggle="modal" data-target="#exampleModalCenter2">Noticia generica</a></h4>
              <p id="lMas" data-toggle="modal" data-target="#exampleModalCenter2">LEER MAS</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- Modal -->
    <div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Alumnos de Sistemas Computacionales, entre los mejores del pais</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>

Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
</p>
        </div>
      </div>
    </div>
  </div>

	<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	      </div>
	    </div>
	  </div>
	</div>
    <!-- ======= Fin noticias ======= -->
    

    

    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>SAUL GONZALES</h3>
            <h4>Ingeniero Mecánico</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              ¡Hola! Soy Saul, egresado de la carera de ingeniería mecánica. Me encuentro trabajando para una de las principales manufactureras de mi país residente. ¡Ven y conoce mi historia!
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>SARA FERNANDEZ</h3>
            <h4>INGENIERA EN SISTEMAS COMPUTACIONALES</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              ¡Buen dia! me llamo sara y egrese como ISC del Instituto Tecnológico de Morelia. ¡Entra y conoce las diferentes empresas para las que he trabajado a lo largo de los años!
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>JENNIFER ANDRADE</h3>
            <h4>INGENIERA BIOQUÍMICA</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              ¡Hola! Soy Jenny y acabo de egresar de la carrera de Ingenieria Bioquimica, gracias a un intercambio logre calificar para un puesto en mi actual empresa, ¡Entra y conoce toda la informacion!
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>BRIAN SANDOVAL</h3>
            <h4>INGENIERO INDUSTRIAL</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              ¡Hola! ¡Hola! Soy Brian y estoy trabajando en distintas empresas en el extranjero como Ingeniero Industrial. Entra y conoce todas las oportunidades que hay para ti.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>DIEGO CÁRDENAS</h3>
            <h4>LIC. EN ADMINISTRACIÓN</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              ¡Hola a todos! soy Diego y licenciado en administración, mi trabajo es bastante interesante ya que trabajo para dos empresas en la misma ciudad.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= About Section ======= -->
    <section id="nosotros" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Identidad</h2>
          <h3>QUIENES  <span>SOMOS</span></h3>
          <p>El departamento de Gestión Tecnológica y Vinculación es la instancia de Instituto tecnológico de Morelia encargada de estrechar la vinculación entre la institución y aquellos que se formaron en sus aulas.</p>
            <p>Tenemos pasión y dedicación por nuestro trabajo, por eso entregamos en cada una de nuestras oficinas, atención y servicios de calidad.</p>
        </div>

        <div class="row">
          <div class="col-lg-15" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          

        </div>

      </div>
    </section><!-- End About Section -->
      
    <br>
      
    <!-- ======= Inicio reportes egresados ======= -->
      
      <div class="section-title">
        
          <h2>Reportes</h2>
          <h3>REPORTES DE <span>EGRESADOS</span></h3>
          <p>Aqui puedes consultar los reportes de egresados segun la carrera y el año de egreso.</p>
            
        </div>
    
    <div class="slider owl-carousel">
        <div class="card">
            <div class="img"><img src="assets/img/Logos/logo%20isc%202018.png" ></div>
            <div class="content">
                <div class="title">Ing Sistemas </div>
                <div class="sub-title">2019</div>
                <p></p>
                <div class="btn"
                     
                     >
                <center><button>DESCARGA</button></center>  
                </div>
                
            </div>
        </div>
        
        <div class="card">
            <div class="img"><img src="assets/img/Logos/logo%20electr%C3%B3nica%20OK.png" style="width: 230px; height: 215px;"></div>
            <div class="content">
                <div class="title">Ing Electronica </div>
                <div class="sub-title">2019</div>
                <p></p>
                <div class="btn">
                <center><button>DESCARGA</button></center> 
                </div>
                
            </div>
        </div>
        
        <div class="card">
            <div class="img"><img src="assets/img/Logos/logo%20materiales.png" style="width: 220px; height: 220px;" ></div>
            <div class="content">
                <div class="title"> Ing Materiales </div>
                <div class="sub-title">2019</div>
                <p></p>
                <div class="btn">
                <center><button>DESCARGA</button></center> 
                </div>
                
            </div>
        </div>
        
        
        <div class="card">
            <div class="img"><img src="assets/img/Logos/Logo%20Mecatronica.png" style="width: 220px; height: 220px;"></div>
            <div class="content">
                <div class="title"> Mecatronica </div>
                <div class="sub-title">2019</div>
                <p></p>
                <div class="btn" href="">
                <center><button>DESCARGA</button></center> 
                </div>
                
            </div>
        </div>
        
        <div class="card">
            <div class="img"><img src="assets/img/Logos/logo%20mec%C3%A1nica.png" alt=""></div>
            <div class="content">
                <div class="title"> Ing Mecanica </div>
                <div class="sub-title">2019</div>
                <p></p>
                <div class="btn">
                <center><button>DESCARGA</button></center> 
                </div>
                
            </div>
        </div>
        
        <div class="card">
            <div class="img"><img src="assets/img/Logos/logos%20administraci%C3%B3n.png" alt=""></div>
            <div class="content">
                <div class="title"> Administracion </div>
                <div class="sub-title">2019</div>
                <p></p>
                <div class="btn">
                <center><button>DESCARGA</button></center> 
                </div>
                
            </div>
        </div>
        
        <div class="card">
            <div class="img"><img src="assets/img/Logos/logos%20contadur%C3%ADa.png" alt=""></div>
            <div class="content">
                <div class="title"> Contaduria </div>
                <div class="sub-title">2019</div>
                <p></p>
                <div class="btn">
                <center><button>DESCARGA</button></center> 
                </div>
                
            </div>
        </div>
        
        <div class="card">
            <div class="img"><img src="assets/img/Logos/logos%20el%C3%A9ctrica.png" alt=""></div>
            <div class="content">
                <div class="title"> Ing Electrica </div>
                <div class="sub-title">2019</div>
                <p></p>
                <div class="btn">
                <center><button>DESCARGA</button></center> 
                </div>
                
            </div>
        </div>
        
        <div class="card">
            <div class="img"><img src="assets/img/Logos/logos%20IGE.png" alt=""></div>
            <div class="content">
                <div class="title"> I G E </div>
                <div class="sub-title">2019</div>
                <p></p>
                <div class="btn">
                <center><button>DESCARGA</button></center> 
                </div>
                
            </div>
        </div>
        
      </div>
            
      <script>
          $(".slider").owlCarousel({
          loop: true,
          autoplay: true,
          });
      </script>

      
    <!-- Final reportes egresados-->

    

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Mexico <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Estados Unidos de Norte America <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Alemania<i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">232</span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">521</span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">1,463</span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">15</span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->


    
<!-- preguntas frecuentes -->
    <section id="encuestas" class="encuestas section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          
          <h3><span>COLABORA CON NOSOTROS</span></h3>
          <p>Nos encantaría saber desde tu criterio cómo es que ha sido tu experiencia con el uso de esta herramienta que hemos creamos para beneficio tuyo.</p>
        </div>

        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

          <li>
            <a data-toggle="collapse" class="" href="#faq1"><strong>¡Califica tu experiencia de uso en el sitio!</strong><i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <br>
              <p>
                <a href="https://forms.gle/wKW8wHF66aRCjqXr7" target="_BLANK"><u>Encuesta en Google Forms</u></a>
                
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed"><strong>¿Qué te gustaría que nuestro sitio tuviera?</strong><i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <br>
              <p>
                <a href="https://forms.gle/wKW8wHF66aRCjqXr7" target="_BLANK"><u>Encuesta en Google Forms</u></a>
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section>
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contacto" class="contacto">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contacto</h2>
          <h3><span>CONTÁCTANOS</span></h3>
          <p>¿Necesitas mas información? No dudes en contactarnos por cualquiera de nuestros medios, estamos para ayudarte.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Nuestra direccion</h3>
              <p>Avenida Tecnológico #1500, Col. Lomas de Santiaguito. Morelia, Mich.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Nuestro correo</h3>
              <p>difusion@itmorelia.edu.mx</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Llamanos</h3>
              <p>+52 (443) 312 1570</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1088.415380615835!2d-101.18578385078953!3d19.722825268546707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e40be8f4d3b%3A0xf001c256ae856856!2sInstituto%20Tecnol%C3%B3gico%20de%20Morelia!5e0!3m2!1ses-419!2smx!4v1606455435694!5m2!1ses-419!2smx" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Por favor ingresa tu nombre" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Tu correo electronico" data-rule="email" data-msg="Ingresa un correo valido" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Ingresa un asunto" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribenos algo" placeholder="Mensaje"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje se ha enviado. !Gracias¡</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Vinculacion ITM<span>.</span></h3>
            <p>
              Avenida Tecnológico #1500 <br> 
              Col. Lomas de Santiaguito. <br>
              Morelia, Mich.
              Mexico<br><br>
              <strong>Telefono:</strong> +52 (443) 312 1570<br>
              <strong>Email:</strong> difusion@itmorelia.edu.mx<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nuestros servicios</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nuestras redes sociales</h4>
            <p>Tambien te puedes enterar de todas las noticias por redes sociales</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Equipo dinamita</span></strong>. Todos los derechos reservados
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bienvenidos a Bolivia</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="bp/img/to update.png" rel="icon">
  <link href="bp/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="bp/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="bp/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="bp/lib/animate/animate.min.css" rel="stylesheet">
  <link href="bp/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="bp/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="bp/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="bp/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <!--twitter Bootstrap datatables-->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">-->
  <!-- <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet"  href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"> -->


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Patrimonios Bolivia</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Patrimonios </a></li>
          <li><a href="#about">Nosotros</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#portfolio">Campañas</a></li>
          <li><a href="#team">Personal</a></li>
          <li class="menu-has-children"><a href="#">Ingresar</a>
            <ul>
              <li><a href="{{ url('/welcome') }}">Usuario Visita</a></li>
              <li><a href="{{ url('admin/login') }}">Usuario Administrador</a></li>
              <li><a href="{{ url('login') }}">Usuario Declarador</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contactos</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
            
          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Casco Minero</h2>
                <p>En Oruro hay varios monumentos erigidos durante el último decenio. Son muy singulares. Uno de ellos está dedicado al casco del minero, que en esencia es un canto al duro trabajo de los mineros. Desde lejos, el casco metálico de enormes dimensiones montado sobre firmes columnas, se ve como una nave de otro planeta con un único pasajero: la Virgen del Socavón, patrona de los mineros.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Comenzar</a>
              </div>
            </div>


        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">
{{--
    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Lorem Ipsum Delino</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->
  --}}

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Nosotros</h3>
          <p>
            Consolidar el liderazgo del Ministerio a nivel cultural y turístico. Transformar la herencia colonial institucional. Promover el desarrollo turístico con énfasis en el turismo cultural – comunitario.Impulsar la producción artística.Optimizar la gestión de patrimonio material e inmaterial, individual y colectivo.Democratizar la producción y el acceso a las manifestaciones culturales. Promocionar y fortalecer la oferta turística con identidad y enfoque pluricultural.  Administrar una gestión pública plurinacional comprometida con los valores y principios establecidos en la Constitución Política del Estado.
          </p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="bp/img/corazon del sur latino america.jpeg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Misión</a></h2>
              <p>
                Promover la construcción de la identidad boliviana plurinacional, intercultural, descolonizada y comunitaria. 
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="bp/img/corazon del sur.png" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Como Estado</a></h2>
              <p>
                Que entidades públicas, organizaciones sociales y civiles opten por una valoración económica y social más equilibrada en relación a la diversidad étnica y cultural del país.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="bp/img/images uyuni.jpeg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Visión</a></h2>
              <p>
                Que las bolivianas y bolivianos valoremos la diversidad cultural y la asumamos como identidad plurinacional
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

         <h4 class="box-title">Buscar Usuarios</h4>
                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" id="dato_buscado">
                                    <span class="input-group-btn">
                                      <button class="btn btn-info btn-flat" type="button" onclick="buscarpatrimonio();" >Buscar!</button>
                                    </span>
                </div>
                <div  >
                <select  id="select_filtro_pais"  onchange="buscarpatrimonio();" >
                 <?php  if(isset($paissel)){ 
                     $listadopais=$paissel->nombre; 
                     $optsel= '<option value="'.$paissel->id.'">'.$paissel->nombre.' </option>';
                }else{  
                    $listadopais="General";
                    $optsel="";
                 } ?>

                 <?=  $optsel;  ?>
                <option value="0">General </option>
                <?php foreach($patrimonialsites as $patrimonialsite){   ?>
                <option value="<?= $patrimonialsite->id; ?>" > <?= $patrimonialsite->department; ?></option>
                <?php }  ?>
                </select>
               
                <span >  Resultados en  listado <b><?= $listadopais; ?></b></span>
                </div>
        </div>


        <table class="table" class="table table-striped table-bordered" id="patrimonialsites">
                    <thead>
                      <tr>
                        <th>Nro</th>
                        <th>Ciudad</th>
                        <th>Provincia</th>
                        <th>Municipio</th>
                        <th>SubAmbito</th>
                        <th>Nombre del Patrimonios</th>
                        <th>Fotografia</th>
                        <th>Más Información</th>
                      </tr>
                    </thead>
                    <tbody> 
                      @foreach ($patrimonialsites as $patrimonialsite)             
                      <tr>
                          <td>{{ $patrimonialsite->id }}</td>
                          <td>{{ $patrimonialsite->department }}</td>
                          <td>{{ $patrimonialsite->province }}</td>
                          <td>{{ $patrimonialsite->municipality  }}</td>
                          <td>{{ $patrimonialsite->subscope }}</td>
                          <td>{{ $patrimonialsite->name_title }}</td>
                          <td>
                              <img src="/uploads/patrimonialsite_photos/{{ $patrimonialsite->patrimonial_photo }}" alt="" border="0" height="200" width="600" style="max-width: 130px;">
                          </td>
                          <td>
                              <a href="/visit/pdf/{{$patrimonialsite->id}}" method="get" class="btn btn-primary" role="button"> <!--data-toggle="modal" data-target="#EditPatrimonial" data-mytitle="Hello">-->
                                    <i class="fa fa-file-text-o"></i> Generar PDF
                                </a>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
        </table>
        <header class="section-header wow fadeInUp">
          <h3>Servicios</h3>
          <p>Son empresas de servicios turísticos complementarios los Centros recreativos turísticos. Parques temáticos y aquéllas dedicadas a proporcionar, mediante precio, actividades y servicios para el esparcimiento y recreo de sus clientes, de tipo deportivo, medioambiental, cultural, recreativas o de salud y que reglamentariamente se clasifiquen como tales.</p>
        </header>



      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Llamada a la acción</h3>
        <p> Si visitas una ciudad por primera vez, deberías sin duda ver todos las empresas y lugares de interés turístico y posar delante de ellos; después de todo, los monumentos y similares son famosos de una gran historia </p>
        <a class="cta-btn" href="#">Ser parte</a>
      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>Nuestros Componentes</h3>
          <p>El diseño Web puede ser fascinante. Crear sitios Web atractivos y profesionales es el sueño de millones de diseñadores de todo el mundo que utilizan las tecnologías de Internet. Un sitio Web debe ser sobre todo accesible, intuitivo y agradable.La organización inicial es muy importante para poder utilizar eficazmente las herramientas y tomar decisiones oportunas.
</p>
        </header>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">HTML <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">CSS <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">JavaScript <i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Photoshop <i class="val">55%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section>
{{--
    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Facts</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>

        <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Clients</p>
                </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">421</span>
            <p>Projects</p>
                </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Hours Of Support</p>
                </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Hard Workers</p>
                </div>

            </div>

        <div class="facts-img">
          <img src="bp/img/facts-img.png" alt="" class="img-fluid">
        </div>

      </div>
    </section><!-- #facts -->
  --}}

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Portales</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-app">Tipo</li>
              <li data-filter=".filter-card">Ubicacion</li>
              <li data-filter=".filter-web">Departamento</li>
              <li data-filter=".filter-web">Provincia</li>
              <li data-filter=".filter-web">Lengua</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="bp/img/portfolio/app1.jpg" class="img-fluid" alt="">
                <a href="bp/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="bp/img/portfolio/web3.jpg" class="img-fluid" alt="">
                <a href="bp/img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="bp/img/portfolio/app2.jpg" class="img-fluid" alt="">
                <a href="bp/img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="bp/img/portfolio/card2.jpg" class="img-fluid" alt="">
                <a href="bp/img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="bp/img/portfolio/web2.jpg" class="img-fluid" alt="">
                <a href="bp/img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="bp/img/portfolio/app3.jpg" class="img-fluid" alt="">
                <a href="bp/img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="bp/img/portfolio/card1.jpg" class="img-fluid" alt="">
                <a href="bp/img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="bp/img/portfolio/card3.jpg" class="img-fluid" alt="">
                <a href="bp/img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="bp/img/portfolio/web1.jpg" class="img-fluid" alt="">
                <a href="bp/img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->
{{--
    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="bp/img/clients/client-1.png" alt="">
          <img src="bp/img/clients/client-2.png" alt="">
          <img src="bp/img/clients/client-3.png" alt="">
          <img src="bp/img/clients/client-4.png" alt="">
          <img src="bp/img/clients/client-5.png" alt="">
          <img src="bp/img/clients/client-6.png" alt="">
          <img src="bp/img/clients/client-7.png" alt="">
          <img src="bp/img/clients/client-8.png" alt="">
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="bp/img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="bp/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="bp/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="bp/img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="bp/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="bp/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="bp/img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="bp/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="bp/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="bp/img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="bp/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="bp/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="bp/img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="bp/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="bp/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Team</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="bp/img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="bp/img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="bp/img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="bp/img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->
  --}}

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contactanos</h3>
          <p>Si tienes alguna consulta, sugerencia para el sitio o algun reporte de mala informcaión</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Direccion</h3>
              <address>Palacio Chico" Calle Ayacucho esq. Potosí #34</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Numero Telefonico</h3>
              <p><a href="tel:+155895548855"> Casilla 7846 • Telf. 2200910-2200946</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">despacho@minculturas.gob.bo</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Turismo BoLivia</h3>
            <p>test developing state.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Nosotros</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Servicios</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terminos de Servicios</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Politicas de Privacidad</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contacto</h4>
            <p>
              <br>
              Nuestra Señora de La Paz<br>
              Bolivia <br>
              <strong>Celular:</strong> +591 73551142<br>
              <strong>Email:</strong> jael@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Lo Ultimo</h4>
            <p>Agradecimientos .</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>QaJe</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="bp/lib/jquery/jquery.min.js"></script>
  <script src="bp/lib/jquery/jquery-migrate.min.js"></script>
  <script src="bp/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="bp/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="bp/lib/easing/easing.min.js"></script>
  <script src="bp/lib/superfish/hoverIntent.js"></script>
  <script src="bp/lib/superfish/superfish.min.js"></script>
  <script src="bp/lib/wow/wow.min.js"></script>
  <script src="bp/lib/waypoints/waypoints.min.js"></script>
  <script src="bp/lib/counterup/counterup.min.js"></script>
  <script src="bp/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="bp/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="bp/lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="bp/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="bp/js/main.js"></script>

  <!-- datatable-->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> --> 
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>



  <script type="text/javascript">
    $(document).ready( function () {
     $ name('#patrimonialsite').DataTable();
    });

    function buscar_patrimonios(){

      var pais=$("#select_filtro_pais").val();
      var dato=$("#dato_buscado").val();
          if(dato == "")
        {
        
          var url="buscar_usuarios/"+pais+"";
        }
        else
        {
          var url="buscar_usuarios/"+pais+"/"+dato+"";
        }
      
      $("#contenido_principal").html($("#cargador_empresa").html());
     $.get(url,function(resul){
        $("#contenido_principal").html(resul);  
      })

    }
  </script>
</body>
</html>
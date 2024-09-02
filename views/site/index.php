<?php

/** @var yii\web\View $this */

$this->title = 'Mi Turno';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title> Turno </title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <!-- Main CSS File -->
  <link href="asse/css/main.css" rel="stylesheet">
</head>






<body class="index-page">



  <header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

  <a href="#hero" class="logo d-flex align-items-center me-auto">
    <!-- Uncomment the line below if you also wish to use un image logo -->
    <!-- <img src="assets/img/logo.png" alt=""> -->
    <h1 class="sitename">Turnos</h1>
    <span></span>
  </a>
  <nav id="navmenu" class="navmenu mx-auto">
    <ul class="d-flex justify-content-center align-items-center">
      <li><a href="#hero" class="active">Inicio</a></li>
      <li><a href="#about">Nosotros</a></li>
      <li><a href="#services">Servicios</a></li>
      <li><a href="#team">Sacar Turno</a></li>
      <li><a href="#contact">Contacto</a></li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
  </nav>
</div>
  </header>



  <main class="main">




    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <img src="img/1.jpeg" alt="" data-aos="fade-in">
      <div class="container">
        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-xl-6 col-lg-8">
            <h2>Barberia en Las Grutas</h2>
            <p>ahora podes sacar turnos</p>
          </div>
        </div>
        <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <i class="bi bi-calendar-check"></i>
              <h3><a class="cta-btn" href="#team">Sacar Turno</a></h3>
          </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <i class="bi bi-calendar-week"></i>
              <h3> <a class="cta-btn" href="#team">Ver mis Turnos</a></h3>
          </div>
     </section><!-- /Hero Section -->






    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="img/3.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 order-2 order-lg-1 content">
            <h3>Sobre Nosotros</h3>
            <p class="fst-italic">
              En Barbería Las Grutas, nos especializamos en ofrecer una experiencia única en el cuidado del cabello para hombres y mujeres. Ubicados en el corazón de Las Grutas, somos más que una barbería; somos un espacio dedicado a transformar tu estilo y resaltar tu personalidad.
              Nuestro equipo de profesionales cuenta con años de experiencia en una amplia variedad de servicios, desde cortes clásicos hasta las últimas tendencias en peinados modernos. Ya sea que busques un cambio radical o un mantenimiento de tu look habitual, estamos aquí para ayudarte.
              Además de cortes de cabello, ofrecemos servicios de tintura y tratamientos capilares personalizados. Solo utilizamos productos de alta calidad para asegurar que tu cabello reciba el mejor cuidado posible. ¿Buscas algo más? También contamos con una selección de productos para el cuidado del cabello, desde shampoos
               y acondicionadores hasta ceras y aceites especializados para barba y bigote.
          </div>
        </div>
      </div>
    </section><!-- /About Section -->








    <!-- Clients Section -->
    <section id="clients" class="clients section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="img/clients/1.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="img/clients/2.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="img/clients/3.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="img/clients/4.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="img/clients/5.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="img/clients/6.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="img/clients/7.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="img/clients/8.jpeg" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- /Clients Section -->





    <!-- Features Section -->
    <section id="features" class="features section">

    </section><!-- /Features Section -->





    <!-- Services Section -->
    <section id="services" class="services section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Servicios</h2>
        <p>Nuestros Servicios</p>
      </div><!-- End Section Title -->
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon">
                <!-- Cambia esta sección para incluir la imagen de la barbería -->
                <img src="img/clients/8.jpeg" alt="Barbería cortando el pelo" class="img-fluid">
              </div>
                <h3>Corte de Pelo Profesional</h3>
              </a>
              <p>Disfruta de un corte de pelo profesional en nuestra barbería, donde nuestros expertos estilistas se asegurarán de que salgas con un estilo fresco y moderno.</p>
            </div>
          </div><!-- End Service Item -->
          
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon">
                <!-- Cambia esta sección para incluir la imagen de la barbería -->
                <img src="img/clients/7.jpeg" alt="Barbería cortando el pelo" class="img-fluid">
              </div>
          
                <h3>Corte de Pelo Profesional</h3>
              </a>
              <p>Disfruta de un corte de pelo profesional en nuestra barbería, donde nuestros expertos estilistas se asegurarán de que salgas con un estilo fresco y moderno.</p>
            </div>
          </div><!-- End Service Item -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon">
                <!-- Cambia esta sección para incluir la imagen de la barbería -->
                <img src="img/clients/6.jpeg" alt="Barbería cortando el pelo" class="img-fluid">
              </div>
          
                <h3>Corte de Pelo Profesional</h3>
              </a>
              <p>Disfruta de un corte de pelo profesional en nuestra barbería, donde nuestros expertos estilistas se asegurarán de que salgas con un estilo fresco y moderno.</p>
            </div>
          </div><!-- End Service Item -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon">
                <!-- Cambia esta sección para incluir la imagen de la barbería -->
                <img src="img/clients/5.jpeg" alt="Barbería cortando el pelo" class="img-fluid">
              </div>
          
                <h3>Corte de Pelo Profesional</h3>
              </a>
              <p>Disfruta de un corte de pelo profesional en nuestra barbería, donde nuestros expertos estilistas se asegurarán de que salgas con un estilo fresco y moderno.</p>
            </div>
          </div><!-- End Service Item -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon">
                <!-- Cambia esta sección para incluir la imagen de la barbería -->
                <img src="img/clients/4.jpeg" alt="Barbería cortando el pelo" class="img-fluid">
              </div>
          
                <h3>Corte de Pelo Profesional</h3>
              </a>
              <p>Disfruta de un corte de pelo profesional en nuestra barbería, donde nuestros expertos estilistas se asegurarán de que salgas con un estilo fresco y moderno.</p>
            </div>
          </div><!-- End Service Item -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon">
                <!-- Cambia esta sección para incluir la imagen de la barbería -->
                <img src="img/clients/3.jpeg" alt="Barbería cortando el pelo" class="img-fluid">
              </div>
          
                <h3>Corte de Pelo Profesional</h3>
              </a>
              <p>Disfruta de un corte de pelo profesional en nuestra barbería, donde nuestros expertos estilistas se asegurarán de que salgas con un estilo fresco y moderno.</p>
            </div>
          </div><!-- End Service Item -->
          
        



    </section><!-- /Services Section -->
    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">
      <img src="img/3.jpeg" alt="">
      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Que esperas para sacar un turno</h3>
              <a class="cta-btn" href="#team">Ir a sacar turno</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->

   
  
   

    <!-- (Team) formulario turno Section -->
    <section id="team" class="team section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Turno</h2>
    <p>Sacar Turno</p>
  </div><!-- End Section Title -->
    <div class="container" data-aos="fade-up" data-aos-delay="100">
  <form id="turnoForm">
    <div class="form-group">
      <label for="nombre">Nombre Completo:</label>
      <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre completo" required>
    </div>
    <div class="form-group">
      <label for="email">Correo Electrónico:</label>
      <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico" required>
    </div>
    <div class="form-group">
      <label for="fecha">Fecha del Turno:</label>
      <input type="date" class="form-control" id="fecha" required>
    </div>
    <div class="form-group">
      <label for="hora">Hora del Turno:</label>
      <input type="time" class="form-control" id="hora" required>
    </div>

    <button type="submit" class="btn btn-primary">Solicitar Turno</button>
  </form>
</div>
</section><!-- /(Team) fin de formulario Section -->







    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contacto</h2>
        <p>Nuestro Contacto y ubicacion</p>
      </div><!-- End Section Title -->
      <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
  <iframe style="border:0; width: 100%; height: 400px;" 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3071.2415085540414!2d-65.10654878530995!3d-40.80300767931806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x969d92b30f926c59%3A0x8b5d170adfae1677!2sLas%20Grutas%2C%20R%C3%ADo%20Negro%2C%20Argentina!5e0!3m2!1sen!2sus!4v1693842679994!5m2!1sen!2sus" 
          frameborder="0" allowfullscreen="" loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade"></iframe>
</div><!-- End Google Maps -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  
  <!-- Incluir Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Incluir Bootstrap Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">





  <div class="container mt-5">
    <div class="row text-center">

      <div class="col-lg-4">
        <div class="info-item d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-geo-alt flex-shrink-0" style="color: #e74c3c; font-size: 2rem;"></i>
          <div class="ms-3">
            <h3>Dirección</h3>
            <p>El Cóndor 930, Las Grutas, Río Negro</p>
          </div>
        </div><!-- End Info Item -->
      </div>

      <div class="col-lg-4">
        <div class="info-item d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-telephone flex-shrink-0" style="color: #3498db; font-size: 2rem;"></i>
          <div class="ms-3">
            <h3>Teléfono</h3>
            <p>+1 5589 55488 55</p>
          </div>
        </div><!-- End Info Item -->
      </div>

      <div class="col-lg-4">
        <div class="info-item d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-envelope flex-shrink-0" style="color: #2ecc71; font-size: 2rem;"></i>
          <div class="ms-3">
            <h3>Email</h3>
            <p>info@example.com</p>
          </div>
        </div><!-- End Info Item -->
      </div>

    </div>
  </div>

  <!-- Incluir Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

<div class="footer-top py-5">
  <div class="container">
    <div class="row gy-4 justify-content-between">

      <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.html" class="logo d-flex align-items-center mb-3">
          <span class="sitename">Barberia</span>
        </a>
        <div class="footer-contact">
          <p>Las Grutas</p>
          <p>Rio Negro</p>
          <p class="mt-3"><strong>Telefono:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>
        <div class="social-links d-flex mt-4">
          <a href="https://web.whatsapp.com/" target="_blank" class="social-icon mx-2" style="color:#25D366;">
            <i class="bi bi-whatsapp"></i>
          </a>
          <a href="https://www.facebook.com/tu-usuario" target="_blank" class="social-icon mx-2" style="color:#4267B2;">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="https://www.instagram.com/tu-usuario" target="_blank" class="social-icon mx-2" style="color:#C13584;">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="https://www.linkedin.com/in/tu-usuario" target="_blank" class="social-icon mx-2" style="color:#0077B5;">
            <i class="bi bi-linkedin"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Nuestros Servicios</h4>
        <ul class="list-unstyled">
          <li><i class="bi bi-chevron-right"></i> <a href="#services"> Cortes de pelo </a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#services"> Corte de barba</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#services"> Decoloracion</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#hero"> Sacar Turno</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#hero"> Volver al Inicio</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Links</h4>
        <ul class="list-unstyled">
          <li><i class="bi bi-chevron-right"></i> <a href="#"> Inicio</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#team"> Nosotros</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#contact"> Contacto</a></li>
        </ul>
      </div>
      
    </div>
  </div>
</div>

<div class="copyright">
  <div class="container text-center">
    <p><span>Copyright</span> <strong class="px-1 sitename">InfinitCode</strong> <span>Todos los derechos reservados</span></p>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you've purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
    </div>
  </div>
</div>

</footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var configElement = document.querySelector('.swiper-config');
    var config = JSON.parse(configElement.innerHTML);

    var swiper = new Swiper('.init-swiper', config);
  });
</script>





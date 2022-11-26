<?php
  include("index_part2.php")

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="canvas.png" rel="icon">
  <link href="canvas.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <title>O Canvas de Usabilidade</title>
  <!-- =======================================================
  * Template Name: Impact - v1.1.1
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">stable1906@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 40028922</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://www.facebook.com/ocanvasdeusabilidade/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/ocanvasdeusabilidade/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://web.whatsapp.com/" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
       
      </div>
    </div>
  </section><!-- End Top Bar -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="canvas.png" alt="">
        <h1>Canvas<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">O que é?</a></li>
          <li><a href="#faq">Como usar?</a></li>
          <li><a href="linkedin-caso-de-exito-olx.pdf"download>Estudo do caso OLX</a></li>
          <li><a href="autopass.pdf"download>Estudo do caso Autopass</a></li>
          <li><a href="#manual">Manual</a></li>
          <li><a href="#contact">Contato</a></li>
          <li><a href="login.php">Login</a></li>

        </ul>
      </nav><!-- .navbar -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
  </header><!-- End Header -->
  <!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2><?php echo "$Slogan"?></h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="usuabilidade.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100" width="500px">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->
  <main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>O que é o Canvas de Usabilidade?</h2>
        </div>
        <div class="row gy-4">
          <div class="significado" >
            <p> <?php echo "$significado"?></p>
          </div>   
        </div>
      </div>
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3><strong>Como usar o Canvas de Usabilidade?</strong></h3>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    Defina a Solução
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    O que será avaliado?
                  </div>
                </div>
              </div><!-- # Faq item-->
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Defina os Requisitos
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Qual requisito ou funcionalidade será avaliado?
                  </div>
                </div>
              </div><!-- # Faq item-->
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Defina os Usuários
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Quem são os participantes da avaliação?
                  </div>
                </div>
              </div><!-- # Faq item-->
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    Defina a(s) Tarefas
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Quais tarefas os participantes irão realizar?
                  </div>
                </div>
              </div><!-- # Faq item-->
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <span class="num">5.</span>
                    Defina o Contexto
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Em quais contextos estão inseridos?
                  </div>
                </div>
              </div><!-- # Faq item-->
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-6">
                    <span class="num">6.</span>
                    Defina a(s) Alternativas
                  </button>
                </h3>
                <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Quais alternativas serão utilizadas?
                  </div>
                </div>
              </div><!-- # Faq item-->
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-7">
                    <span class="num">7.</span>
                    Defina os Critérios
                  </button>
                </h3>
                <div id="faq-content-7" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Quais são os critérios utilizados?
                  </div>
                </div>
              </div><!-- # Faq item-->
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-8">
                    <span class="num">8.</span>
                    Defina as Métricas
                  </button>
                </h3>
                <div id="faq-content-8" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Quais são as métricas utilizados?
                  </div>
                </div>
              </div><!-- # Faq item-->
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Frequently Asked Questions Section -->
    <section id="manual" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Manual</h2>
        </div>
        <div id="botão" class="row gy-4">
          <h5>Clique abaixo para realizar o download do manual</h5>
          <div  class="botão">
            <a  id="link" href="Manual.docx" download>Baixar Manual</a>
          </div>       
        </div>
      </div>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Contato</h2>
        </div>
        <div id="contact" class="row gx-lg-0 gy-4">
          <div class="col-lg-4">
            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Localização:</h4>
                  <p>BR-230 - Água Fria, João Pessoa - PB, 58053-000</p>
                </div>
              </div><!-- End Info Item -->
              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>stable1906@gmail.com</p>
                </div>
              </div><!-- End Info Item -->
              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Telefone:</h4>
                  <p>+1 40028922</p>
                </div>
              </div><!-- End Info Item -->
              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Aberto:</h4>
                  <p>Segunda-Sexta: 08:00-19:30</p>
                </div>
              </div><!-- End Info Item -->
            </div>
          </div>
          <div class="col-lg-8">
            <form  action="form.php" method="POST" role="form">
                <div  class="mb-3">
                  <h4>Inscreva-se para ficar por dentro das novidades</h4><br/>
                  <label for="exampleInputEmail1" class="form-label">E-mail</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputname" class="form-label">Nome</label>
                  <input type="name" name="nome" class="form-control" id="exampleInputname" placeholder="Digite seu Nome" required>
                </div>
                <button  type="submit" class="btn btn-primary">Enviar</button>
              </form>
          </div><!-- End Contact Form -->
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Canvas de usuabilidade</span>
          </a>
          <div class="social-links d-flex mt-4">
            <a href="https://www.facebook.com/ocanvasdeusabilidade/" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/ocanvasdeusabilidade/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://web.whatsapp.com/" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-6 footer-links">
          <h4>Links Úteis</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#about">O que é</a></li>
            <li><a href="#faq">como usar?</a></li>
            <li><a href="#contact">contato</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contato</h4>
          <p>
            BR-230 - Água Fria <br>
            João Pessoa - PB, 58053-000<br>
            Brasil <br><br>
            <strong>Phone:</strong> +1 40028922<br>
            <strong>Email:</strong> stable1906@gmail.com<br>
          </p>
        </div>
      </div>
    </div>
    <div class="container mt-4">
      <div class="copyright">
        &copy; Direitos autorais de  <strong><span>Canvas</span></strong>. Todos os direitos reservados
      </div>
      <div class="credits">
        Projetado por <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- End Footer -->
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>
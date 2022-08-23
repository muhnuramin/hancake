<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hanisun Cake</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo_h.png" rel="icon">
  <link href="assets/img/logo_h.png" rel="logo_h">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v4.8.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="logo mr-auto">
        <h1><a href="Beranda_c">HANISUN CAKE</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo site_url('Home') ?>"><?php echo get_phrase('Beranda') ?></a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url('About-us') ?>"><?php echo get_phrase('Tentang Kami') ?></a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url('Our-Products') ?>"><?php echo get_phrase('Produk Kami') ?></a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url('Photo-Gallery') ?>"><?php echo get_phrase('Galeri Foto') ?></a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url('Contacts') ?>"><?php echo get_phrase('Hubungi Kami') ?></a></li>
          <li>
          <a href="#" class="" data-toggle="dropdown">
            <?php echo get_phrase('Pilih Bahasa'); ?>
            <img src="<?php echo base_url('assets/') ?>flag/id.png">&nbsp;<img src="<?php echo base_url('assets/') ?>flag/en.png">
            &nbsp;
            <i class="ace-icon fa fa-angle-down bigger-110"></i>
          </a>
          <ul class="dropdown-menu dropdown-light-blue dropdown-caret">
            <?php
            $fields = $this->db->list_fields('language');
            foreach ($fields as $field) {
              if ($field == 'phrase_id' || $field == 'phrase') continue;
            ?>
              <li>
                <a href="<?php echo base_url(); ?>Multilanguage/select_language/<?php echo $field; ?>" style="color:black;">
                  <?php echo $field; ?>
                  <?php //selecting current language
                  if ($this->session->userdata('current_language') == $field) : ?>
                    <i class="icon-ok"></i>
                  <?php endif; ?>
                </a>
              </li>
            <?php
            }
            ?>
          </ul>
        </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-image: url('assets/img/about.jpeg');">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">About Us</h2>
            </div>
          </div>
        </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

  <!-- ======= About Us Section ======= -->
  <main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="row no-gutters">
            <div class="col-lg-6 video-box">
              <img src="assets/img/about.png" class="img-fluid" alt="">
            </div>
  
            <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
  
            <div class="section-title">
                <h2>HANISUN CAKE</h2>

                <p>HANISUN CAKE, CV.
                <br>(Hanisuncake merupakan eksportir dan produsen pengolahan nanas di Provinsi Riau, khususnya Kota Pekanbaru-Indonesia. Dirintis pada tahun 2012 dengan produk aneka cake, costume cake made by order. 
                Dan kami terus berkembang, selanjutnya pada tahun 2018 kami mulai mendirikan CV. Hanisun Gulden Riau yang fokus memproduksi cake oleh-oleh olahan nanas. Olahan nanas yang dihasilkan terdiri dari: 
                selai nanas, pie nanas, stik nanas, lekker nanas, dodol nanas dan kue kering berbahan dasar nanas lainnya. 
                Semua produk terbuat dari bahan baku nanas yang diperoleh dari petani nanas di provinsi Riau khususnya kota Pekanbaru. 
                Ditangani oleh tim kerja atau tim produksi yang berkualitas dan kompeten, Hanisun memastikan untuk menawarkan kemampuan produksi terbaik, 
                dengan mempertimbangkan kehalalan produk, kebersihan dan dengan harga yang terjangkau. 
                Mengontrol kualitas produk dan layanan secara berkesinambungan dan berkelanjutan. 
                Melakukan pengembangan atau inovasi produk yang mmeliputi desain produk, pengemasan, pemasaran, cita rasa dan keunikan produk dan jasa kepada konsumen.)

                <br> 
                <br>ARE WE DOING </br>
                (Hanisun mengolah bahan baku nanas menjadi produk yang memiliki cita rasa berbeda, yang juga merupakan produk oleh-oleh khas kota Pekanbaru. 
                Nanas diolah menjadi berbagai produk makanan yang siap disantap dengan kualitas dan kuantitas terbaik. 
                Buah nanas diperoleh dari petani nanas yang berdomisili di kota Pekanbaru. kemudian nanas dikupas, diparut dengan parutan lalu dimasak menjadi 
                selai nanas. Selai nanas yang sudah matang, diolah menjadi aneka kue dan dibuat menjadi selai nanas sendiri yang siap dipasarkan secara 
                nasional dan internasional. Adapun kapasitas produk yang kami hasilkan setiap bulannya sebanyak 800 buah nenas yang dijadikan selai. 
                Dan sertifikat yang dimiliki adalah izin dinas kesehatan (PIRT), HAKI dan Halal MUI
                
                <br> 
                <br>SPECIALITY</br>
                (Produk unggulan kami adalah selai nenas dan pie nenas. Kelebihan dari produk kami ini adalah kemasan yang bagus dan aman, siap saji, asli nenasnya tanpa ada campuran bahan lainnya serta memiliki 
                sertifikat dinas kesehatan, halal MUI dan hak kekayaan intelektual (HAKI). Produk kami juga memiliki cara pengolahan khusus sehingga tahan lama, tidak basah (set/kering).
                
                <br>
                <br> IS OUR CREDO </br>
                (Kami berkomitmen untuk menyediakan produk dengan kualitas terbaik, layanan dan harga yang kompetitif untuk semua pelanggan kami).</p>
            </div>
        </div>
        </div>
    </section><!-- End About Us Section -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
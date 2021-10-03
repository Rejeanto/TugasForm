<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PMB UPJ</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Techie - v4.5.0
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="pmb.php">P M B</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Pendaftaran</a></li>
          <li><a class="nav-link scrollto" href="#services">Sejarah UPJ</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>PMB Universitas Pembangunan Jaya</h1>
          <h2>Selamat Datang di pendaftaran Universitas Pembangunan Jaya</h2>
          <div><a href="#about" class="btn-get-started scrollto">Pendaftaran</a></div>
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>Pendaftaran Mahasiswa</h3>
            <form action="konfirmasipmb.php" method="post">
                Nama : <input type="text" name="namai"><br>
	            <br/>
                Usia: <input type="text" name="Usiai"><br>
        	    <br/>
                Jurusan: <input type="text" name="Jurusani"><br>
	            <br/>
                Asal: <input type="text" name="Asali"><br>
              <br/>
              <input type="submit" value="kirim" name="tombol">
            </form>
            <?php 
                if (isset($_POST['tombol'])){
                    $qnama = $_POST['namai'];
                    $qusia = $_POST['Usiai'];
                    $qjurusan = $_POST['Jurusani'];
                    $qasal = $_POST['Asali'];
                    echo "Nama :".$qnama;
                    echo "<br>Usia :".$qusia;
                    echo "<br>Jurusan :".$qjurusan;
                    echo "<br>Asal :".$qasal;
                }
            ?>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="504" data-purecounter-duration="1" class="purecounter"></span>
            <p>Mahasiswa UPJ</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="1" class="purecounter"></span>
            <p>Jurusan</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="61" data-purecounter-duration="1" class="purecounter"></span>
            <p>Dosen</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
            <p>Gedung</p>
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sejarah UPJ</h2>
          <p>Universitas Pembangunan Jaya (UPJ) adalah sebuah perguruan tinggi swasta di daerah Bintaro yang berdiri pada tahun 2011 dan didukung oleh kelompok usaha Pembangunan Jaya. Kelompok usaha Pembangunan Jaya memiliki 17 usaha yang bergerak dibidang properti, manufaktur, konsultan manajemen, konsultan desain, kontraktor, pariwisata/rekreasi, trading, mekanikal & elektrikal dan pendidikan. Kelompok usaha Pembangunan Jaya memiliki pengalaman lebih dari 50 tahun dalam mengelola sektor usaha dan beritikad untuk mengabdikan sebagian dari kegiatan usaha induknya ke pendidikan dalam membangun sumber daya manusia Indonesia yang lebih berkualitas. Itikad ini, telah diwujudkan dengan mendirikan Yayasan Pendidikan Jaya sejak 3 September 1991. Yayasan Pendidikan Jaya telah menaungi penyelenggaraan pendidikan taman kanak-kanak, pendidikan dasar dan pendidikan menengah yaitu TK/SD/SMP/SMA Sekolah Pembangunan Jaya I di Bintaro sejak tahun 1992, TK/SD/SMP/SMA Global Jaya tahun 1995, dan TK dan SD Sekolah Pembangunan Jaya II di Surabaya sejak tahun 2006. Berangkat dari keberhasilan dalam pengelolaan pendidikan dasar dan menengah lebih dari 10 tahun, Yayasan Pendidikan Jaya berinisiatif melangkah lebih jauh untuk membentuk institusi pendidikan tinggi yang diberi nama Universitas Pembangunan Jaya. Melalui perjalanan yang cukup panjang dan berliku akhirnya Universitas Pembangunan Jaya berhasil mengantongi ijin penyelenggaran pendidikan tinggi pada tahun 2011.Berbekal moto "Integrity, professionalism, and Entrepreneurship", UPJ adalah sebuah rumah belajar di mana di mana mahasiswa dapat menimba ilmu dan mengembangkan diri untuk menjadi insan berintegritas, profesional, kreatif, inovatif, dan berjiwa entrepreneur.
Awal mula penyelenggaraan pendidikan tinggi, UPJ menempati sebuah ruko yang berada di kawasan Bintaro Jaya. Seiring dengan pertumbuhan mahasiswa dan kebutuhan pengembangan kampus yang lebih baik, dengan dukungan penuh dari kelompok usaha Pembangunan Jaya dan Yayasan Pendidikan Jaya, UPJ menempati gedung baru yang juga berada di kawasan Bintaro Jaya sejak Juni 2015. Keseriusan kelompak usaha Pembangunan Jaya dan yayasan Pendidikan Jaya dalam mendukung UPJ ditunjukkan dengan komitmen lahan seluas 15 hektar yang dialokasikan untuk pengembangan UPJ 20 tahun ke depan.</p>
        </div>
      </div>
    </section><!-- End Services Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Alamat</h3>
            <p>
              Jalan Cendrawasih Raya Blok B7/P <br>
              Sawah Baru, Kec. Ciputat<br>
              Kota Tangerang Selatan<br><br>
              <strong>Phone:</strong> (021) 7455555<br>
              <strong>Email:</strong> 	info@upj.ac.id<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pendaftaran</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sejarah UPJ</a></li>
            </ul>
          </div>


        </div>
      </div>
    </div>

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Techie</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
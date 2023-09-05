<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>kitaponerisi.net | Yönetici Giriş Ekranı</title>
  <link href="/kitaponerisinet/tools/img/kitaponerisinet.png" rel="icon">
  <link href="/kitaponerisinet/tools/img/kitaponerisinet.png" rel="apple-touch-icon">
  <meta charset="utf-8">
  <meta name="description" content="Okuduğun kitaplardan yola çıkarak sana en uygun kitapların önerisini kitaponerisi.net'ten alabilirsin!">
  <meta name="keywords" content="kitap,oneri,kitaponerisi,roman,siir">
  <meta name="author" content="Hakan KUMAŞ">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="tools/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="tools/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="tools/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="tools/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="tools/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="tools/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="tools/assets/css/style.css" rel="stylesheet">
</head>
<body>
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="/kitaponerisinet/tools/img/kitaponerisinet.png" alt="">
        <span>kitaponerisi.net</span>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Ana Sayfa</a></li>
          <li><a class="nav-link scrollto" href="#about">Biz Kimiz</a></li>
          <li><a class="nav-link scrollto" href="#services">İşlem</a></li>
          <li class="dropdown"><a href="#"><span>Giriş Yap</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="login-user.php">Kullanıcı</a></li>
              <li><a href="login-admin.php">Yönetici</a></li>
            </ul>
          </li>
          <li><a class="getstarted scrollto" href="create-user.php">Kayıt Ol</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container p-4"></div>
    </section><!-- End Breadcrumbs -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 entries justify-content-center" style="padding-left: 25%; padding-right: 25%;">
            <div class="blog-comments">
              <div class="reply-form">
                <h2 class="text-center">Yönetici Giriş Ekranı</h2>
                <hr class="m-5">
                <form action="tools/process.php" method="POST">
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="text" name="admin_username" class="form-control" placeholder="Kullanıcı Adı" required autofocus>
                    </div>
                    <div class="col-md-12 form-group">
                      <input type="password" name="admin_password" class="form-control" placeholder="Şifre" required>
                    </div>
                  </div>
                  <button type="submit" name="admin_login" class="btn btn-primary" style="display: flex; margin:auto;">Giriş Yap</button>
                </form>
              </div>
            </div><!-- End blog comments -->
          </div><!-- End blog entries list -->
        </div>
      </div>
    </section><!-- End Blog Single Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="#hero" class="logo d-flex align-items-center">
              <img src="/kitaponerisinet/tools/img/kitaponerisinet.png" alt="">
              <span>kitaponerisi.net</span>
            </a>
            <p>Okuma listeni zenginleştir, zevkine uyan kitapları hemen bul!</p>
            <div class="social-links mt-3">
              <a href="https://www.linkedin.com/in/hakankumas/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
              <a href="https://github.com/hakankumas" target="_blank" class="github"><i class="bi bi-github"></i></a>
            </div>
          </div>

          <div class="col-lg-7 col-md-12 footer-contact text-center text-md-end">
            <h4>Bağlantı</h4>
            <p>
              Sakarya | İzmir<br>
              Türkiye <br><br>
              <strong>Email:</strong> hakankumas54@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>kitaponerisi.net </span></strong>
        <script>document.write(new Date().getFullYear())</script>.
        All Rights Reserved.
      </div>
      <div class="credits">
        Developed by <a href="https://www.linkedin.com/in/hakankumas/">Hakan KUMAŞ</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="tools/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="tools/assets/vendor/aos/aos.js"></script>
  <script src="tools/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="tools/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="tools/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="tools/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="tools/assets/vendor/php-email-form/validate.js"></script>
  <script src="tools/assets/js/main.js"></script>
</body>
</html>
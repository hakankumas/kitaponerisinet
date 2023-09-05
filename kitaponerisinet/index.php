<?php 

include('tools/connect.php');
include('tools/query-numberofuser.php');
include('tools/query-numberofrecommend.php');
include('tools/query-numberofreadbookbyuser.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>kitaponerisi.net | Ana Sayfa</title>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">kitaponerisi.net</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Okuma listeni zenginleştir, zevkine uyan kitapları hemen bul!</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Keşfet!</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="/kitaponerisinet/tools/img/kitaponerisinet_hand.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Biz Kimiz?</h3>
              <h2>Bizler de tıpkı senin gibi kitap okumayı çok seviyor ve yeni kitaplar keşfetmek istiyoruz.</h2>
              <p>İşte bunun için kitaponerisi.net'i hayata geçirdik. 🙂</p>
            </div>
          </div>

          <div class="col-lg-6 d-flex justify-content-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="/kitaponerisinet/tools/img/kitaponerisinet_boy.png" width="300px" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6">
            <div class="count-box justify-content-center">
              <i class="bi bi-person-plus-fill"></i>
              <div>
                <?php foreach($userList as $user) { ?>
                <span data-purecounter-start="0" data-purecounter-end="<?= $user->number ?>" data-purecounter-duration="1" class="purecounter"></span>
                <?php } ?>
                <p>Kullanıcı</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="count-box justify-content-center">
              <i class="bi bi-share" style="color: #ee6c20;"></i>
              <div>
                <?php foreach($recommendofbookList as $recommendofbook) { ?>
                <span data-purecounter-start="0" data-purecounter-end="<?= $recommendofbook->number ?>" data-purecounter-duration="1" class="purecounter"></span>
                <?php } ?>
                <p>Kitap Önerisi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="count-box justify-content-center">
              <i class="bi bi-book-half" style="color: #15be56;"></i>
              <div>
                <?php foreach($readbookbyuserList as $readbookbyuser) { ?>
                <span data-purecounter-start="0" data-purecounter-end="<?= $readbookbyuser->number ?>" data-purecounter-duration="1" class="purecounter"></span>
                <?php } ?>
                <p>Okunan Kitap</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>İŞLEM</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <i class="ri-discuss-line icon"></i>
              <h3>Hemen Kayıt Ol</h3>
              <p>Kullanıcı kayıt ekranına giderek bir hesap oluştur ve aramızdaki yerini al!</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <i class="ri-discuss-line icon"></i>
              <h3>Kitap Ekle</h3>
              <p>Sana en uygun kitapları önerebilmemiz için okuduğun kitaplarla ilgili veri girişi yap!</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <i class="ri-discuss-line icon"></i>
              <h3>Önerileri Keşfet</h3>
              <p>İşte şimdi Ana Ekranında senin için önerdiğimiz kitapları keşfedebilirsin!</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>İLETİŞİM</p>
        </header>

        <div class="row gy-4">
          <div class="col-lg-12 justify-content-center" style="padding-left: 20%; padding-right: 20%;">
            <form action="tools/process.php" method="POST" class="php-email-form1">
              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" class="form-control" name="nonusertoadmin_message_name" placeholder="Adınız" required>
                </div>

                <div class="col-md-6 ">
                  <input type="text" class="form-control" name="nonusertoadmin_message_surname" placeholder="Soyadınız" required>
                </div>

                <div class="col-md-12">
                  <input type="email" class="form-control" name="nonusertoadmin_message_mail" placeholder="Mail Adresiniz" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="nonusertoadmin_message_title" placeholder="Konu Başlığı" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="nonusertoadmin_message_content" rows="6" placeholder="Konu İçeriği" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-lg" style="background-color:#4154f1; color:white;" name="add_nonusertoadmin_message" id="add_nonusertoadmin_message">Gönder</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

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
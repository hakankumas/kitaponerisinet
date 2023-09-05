<?php
session_start();

$admin_username = $_SESSION['admin_username'];
$admin_password = $_SESSION['admin_password'];

include('tools/connect.php');

?>




<!doctype html>
<html lang="en">
<head>
  <title>kitaponerisi.net | Admin | Şifre Değişikliği</title>
  <link href="/kitaponerisinet/tools/img/kitaponerisinet.png" rel="icon">
  <meta charset="utf-8">
  <meta name="description" content="Okuduğun kitaplardan yola çıkarak sana en uygun kitapların önerisini kitaponerisi.net'ten alabilirsin!">
  <meta name="keywords" content="kitap,oneri,kitaponerisi,roman,siir">
  <meta name="author" content="Hakan KUMAŞ">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <?php include("partials/cdn-fontawesome.php");?>
    <?php include("partials/cdn-jquery.php");?>
  <link rel="stylesheet" href="partials/page_up.css">
</head>
<body>
  <!-- NAVBAR START -->
  <?php include("partials/navbar.php");?>
  <!-- NAVBAR FINISH -->

  <div class="container mt-3">
    <div class="row">
      <div class="col-12">
        <b><i><h6 class="text-end mt-3 mb-5">Admin / Ayarlar/ Şifre Değişikliği</h6></i></b>
      </div>
      <div class="col-12 bg-light pb-5 mb-5" style="border-radius: 20px; border:solid 1px light;">
        <div class="card-deck m-5">
          <div class="card col-12 mb-5" style="align-items:center; border:solid 1px white; box-shadow:1px 1px 5px 1px">        
            <div class="card-body mb-5">
              <form action="process.php" method="POST">
                <h1 class="text-center m-5"><i><b>Şifre Değişikliği</b></i></h1>
                <div class="mt-4">
                  <label for="now_admin_password" class="form-label">Mevcut Şifreniz</label>
                  <input type="text" class="form-control" name="now_admin_password" id="now_admin_password" required autofocus>
                </div>

                <div class="mt-4">
                  <label for="new_admin_password" class="form-label">Yeni Şifre</label>
                  <input type="text" class="form-control" name="new_admin_password" id="new_admin_password" required>
                </div>

                <div class="mt-4">
                  <label for="new2_admin_password" class="form-label">Yeni Şifre Tekrardan</label>
                  <input type="text" class="form-control" name="new2_admin_password" id="new2_admin_password">
                </div>

                <div class="mt-4">
                  <input type="submit" name="update_admin_password" id="update_admin_password" class="btn btn-lg btn-success mt-5" style="display:flex; margin:auto;">
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL START -->
  <?php include('partials/modal_bullhorn.php'); ?>
  <?php include('partials/modal_pen.php'); ?>
  <?php include('partials/modal_envelope.php'); ?>
  <?php include('partials/modal_out.php'); ?>
  <!-- MODAL FINISH -->

  <!-- JS FOR MODAL START -->
  <script src="partials/bullhorn.js"></script>
  <script src="partials/pen.js"></script>
  <script src="partials/envelope.js"></script>
  <script src="partials/out.js"></script>
  <!-- JS FOR MODAL FINISH -->

  <!-- FOOTER START -->
  <?php include("partials/footer-relative.php");?>
  <script src="partials/footer-jquery.js"></script>
  <!-- FOOTER FINISH -->

  <!-- PAGE UP START -->
  <?php include("partials/page_up.php");?>
  <script src="partials/page_up.js"></script>
  <!-- PAGE UP FINISH -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>
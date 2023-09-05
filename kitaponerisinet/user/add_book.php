<?php
session_start();

$user_username = $_SESSION['user_username'];
$user_password = $_SESSION['user_password'];

include('tools/connect.php');
include("query-typeofbook.php");



?>



<!doctype html>
<html lang="en">
<head>
  <title>kitaponerisi.net | Kullanıcı | Kitap Ekle</title>
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

  <div class="container mt-3" style="height: 100vh;">
    <div class="row">
      <div class="col-12 rounded pb-3 pt-3 mb-5 mt-3" style="background-color:aliceblue; padding:25%;">
        <form action="process.php" method="POST" class="form-group bg-light p-3 mt-4">
          <h1 class="mb-5 text-center"><b>Kitap Ekle</b></h1>
          <div class="mb-4">
            <label for="book_name" class="form-label">Kitap Adı</label>
            <input type="text" class="form-control" name="book_name" id="book_name" required autofocus>
          </div>
          <div class="mb-4">
            <label for="typeofbook_name" class="form-label">Kitap Türü</label>
            <select class="form-select" name="typeofbook_name" id="typeofbook_name" required>
              <option value="" selected></option>
              <?php foreach($typeofbookList as $typeofbook){?>
              <option value="<?= $typeofbook->typeofbook_name ?>"><?= $typeofbook->typeofbook_name ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="mb-3 mt-5">
            <button type="submit" class="btn btn-lg btn-success btn-icon-split mt-3" name="add_user_book" id="add_user_book" style="display: flex; margin:auto;">
              <span class="icon text-white-100"><i class="fas fa-check"></i></span>
              <span class="text ps-2">Tamamla</span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- MODAL START -->
  <?php include('partials/modal_bullhorn.php'); ?>
  <?php include('partials/modal_envelope.php'); ?>
  <?php include('partials/modal_out.php'); ?>
  <!-- MODAL FINISH -->

  <!-- FOOTER START -->
  <?php include("partials/footer-relative.php");?>
  <script src="partials/footer-jquery.js"></script>
  <!-- FOOTER FINISH -->

  <!-- JS FOR MODAL START -->
  <script src="partials/bullhorn.js"></script>
  <script src="partials/envelope.js"></script>
  <script src="partials/out.js"></script>
  <!-- JS FOR MODAL FINISH -->

  <!-- PAGE UP START -->
  <?php include("partials/page_up.php");?>
  <script src="partials/page_up.js"></script>
  <!-- PAGE UP FINISH -->
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>
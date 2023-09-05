<?php
session_start();

$recommendofbook_id = htmlspecialchars($_GET["recommendofbook_id"]);

$admin_username = $_SESSION['admin_username'];
$admin_password = $_SESSION['admin_password'];

include('tools/connect.php');
include('query-selectedbook.php');



?>



<!doctype html>
<html lang="en">
<head>
  <title>kitaponerisi.net | Kullanıcı | Kitap Detayları</title>
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
    <style>
      .box{
        width: 50%;
        height: 350px;
        padding: 10px;
        background-color:beige;
        object-fit: contain ;
      }
      .boxText{
        width: 50%;
        height: auto;
      }
    </style>
    <link rel="stylesheet" href="partials/page_up.css">
</head>
<body>
  <!-- NAVBAR START -->
  <?php include("partials/navbar.php");?>
  <!-- NAVBAR FINISH -->

  <div class="container mt-3">
    <div class="row">
      <div class="col-12 rounded pb-3 pt-3 mb-5 mt-3" style="background-color:aliceblue;">
        <?php foreach($recommendofbookList as $recommendofbook) { ?>
          <div class="card col-12" style="align-items:center;">
            <h1 class="card-title text-center mt-4"><?= $recommendofbook->recommendofbook_name ?></h1>
            <img class="box rounded card-img-top mt-4" src="<?= $recommendofbook->recommendofbook_img ?>">
            <div class="card-body boxText mb-4">
              <p class="card-text" style="text-align:justify; text-indent:30px;"><?= $recommendofbook->recommendofbook_info ?></p>
              <p class="card-text"><small class="text-muted"><b>Yazar: </b><?= $recommendofbook->recommendofbook_author ?></small></p>
              <p class="card-text"><small class="text-muted"><b>Tür: </b><?= $recommendofbook->typeofbook_name ?></small></p>
              <p class="card-text"><small class="text-muted"><b>Yayınevi: </b><?= $recommendofbook->recommendofbook_publisher ?></small></p>
              <?php if($recommendofbook->recommendofbook_translator != NULL){?>
                <p class="card-text"><small class="text-muted"><b>Çevirmen: </b><?= $recommendofbook->recommendofbook_translator ?></small></p>
              <?php } ?>
              <p class="card-text"><small class="text-muted"><b>ISBN: </b><?= $recommendofbook->recommendofbook_ISBN ?></small></p>
              <p class="card-text"><small class="text-muted"><b>Orijinal Dil: </b><?= $recommendofbook->recommendofbook_language ?></small></p>
              <p class="card-text"><small class="text-muted"><b>Sayfa Sayısı: </b><?= $recommendofbook->recommendofbook_numberofpage ?></small></p>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>



  <!-- MODAL START -->
  <?php include('partials/modal_out.php'); ?>
  <!-- MODAL FINISH -->

  <!-- JS FOR MODAL START -->
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
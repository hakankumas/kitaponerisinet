<?php
session_start();

$user_username = $_SESSION['user_username'];
$user_password = $_SESSION['user_password'];

include('tools/connect.php');
include('query-allbook.php');
include('query-allbookCount.php');





?>





<!doctype html>
<html lang="en">
<head>
  <title>kitaponerisi.net | Kullanıcı | Keşfet</title>
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
      .line-clamp1{
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
      }
      .line-clamp5{
        display: -webkit-box;
        -webkit-line-clamp: 5;
        -webkit-box-orient: vertical;
        overflow: hidden;
      }
      .box{
        width: 300px;
        height: 300px;
        padding: 10px;
        background-color:beige;
        object-fit: contain ;
        /* max-width: 300px; */
        /* min-width: 300px; */
      }
      .boxText{
        width: 300px;
        height: 225px;
      }
      .boxTextInfo{
        width: 100%;
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
      <div class="col-12 rounded pb-5 mb-5" style="background-color:aliceblue;">
        <div class="card-deck mt-5">
          <i><h1 class="text-center mt-5 ">TÜM KİTAPLAR</h1></i>
          <i><h2 class="text-center m-4 mb-5">
            <?php foreach($allBookCount as $count) { 
                echo "(".$count->numberofbook." Adet)"; 
              } 
            ?>
          </h2></i>
        <?php foreach($allBookList as $allBook) { ?>
          <div class="card col-3 mb-5" style="float:left; margin-left:6%; align-items:center;">
            <img class="box card-img-top mt-4" src="<?= $allBook->recommendofbook_img ?>" style="width: 300px">
            <div class="card-body boxText">
              <h5 class="card-title line-clamp1 text-center"><?= $allBook->recommendofbook_name ?></h5>
              <p class="card-text line-clamp5" style="text-align:justify; text-indent:30px;"><?= $allBook->recommendofbook_info ?></p>
              <p class="card-text"><small class="text-muted"><b>Tür: </b><?= $allBook->typeofbook_name ?></small></p>
            </div>
            <div class="botTextInfo">
              <a href="search.php?allBook_id=<?= $allBook->recommendofbook_id ?>" class="btn btn-lg btn-success mt-3 mb-3" style="display: flex; margin:auto; justify-content: center;" target="_blank"><b>Daha Fazla Bilgi...</b></a>
            </div>
          </div>
        <?php } ?>
        </div>
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
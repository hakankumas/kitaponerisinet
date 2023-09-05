<?php
session_start();

$admin_username = $_SESSION['admin_username'];
$admin_password = $_SESSION['admin_password'];

include('tools/connect.php');
include('query-typeofbook.php');

?>




<!doctype html>
<html lang="en">
<head>
  <title>kitaponerisi.net | Admin | Kitap Önerisi Ekle</title>
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
        <b><i><h6 class="text-end mt-3 mb-5">Admin / Kitap / Kitap Önerisi Ekle</h6></i></b>
      </div>
      <div class="col-12 bg-light pb-5 mb-5" style="border-radius: 20px; border:solid 1px light;">
        <div class="card-deck m-5">
          <div class="card col-12 mb-5" style="align-items:center; border:solid 1px white; box-shadow:1px 1px 5px 1px">        
            <div class="card-body mb-5">
              <form action="/kitaponerisinet/tools/process.php" method="POST" enctype="multipart/form-data">
                <h1 class="text-center m-5"><i><b>Kitap Önerisi Ekle</b></i></h1>
                <div class="mb-3">
                  <label for="recommendofbook_name" class="form-label">Kitap Adı</label>
                  <input type="text" class="form-control" name="recommendofbook_name" id="recommendofbook_name" required autofocus>
                </div>

                <div class="mb-3">
                  <label for="recommendofbook_author" class="form-label">Yazar</label>
                  <input type="text" class="form-control" name="recommendofbook_author" id="recommendofbook_author" required>
                </div>

                <div class="mb-3">
                  <label for="typeofbook_name" class="form-label">Kitap Türü</label>
                  <select class="form-select form-control" name="typeofbook_name" id="typeofbook_name" required>
                    <option selected disabled></option>
                    <?php foreach($typeofbookList as $typeofbook) { ?>
                    <option value="<?= $typeofbook->typeofbook_name?>"><?= $typeofbook->typeofbook_name?></option>
                    <?php } ?>
                  </select>
                </div>
                
                <div class="mb-3">
                  <label for="recommendofbook_publisher" class="form-label">Yayınevi</label>
                  <input type="text" class="form-control" name="recommendofbook_publisher" id="recommendofbook_publisher">
                </div>

                <div class="mb-3">
                  <label for="recommendofbook_translator" class="form-label">Çevirmen</label>
                  <input type="text" class="form-control" name="recommendofbook_translator" id="recommendofbook_translator">
                </div>

                <div class="mb-3">
                  <label for="recommendofbook_ISBN" class="form-label">ISBN</label>
                  <input type="text" class="form-control" name="recommendofbook_ISBN" id="recommendofbook_ISBN">
                </div>

                <div class="mb-3">
                  <label for="recommendofbook_language" class="form-label">Orijinal Dil</label>
                  <input type="text" class="form-control" name="recommendofbook_language" id="recommendofbook_language">
                </div>

                <div class="mb-3">
                  <label for="recommendofbook_numberofpage" class="form-label">Sayfa Sayısı</label>
                  <input type="text" class="form-control" name="recommendofbook_numberofpage" id="recommendofbook_numberofpage">
                </div>

                <div class="mb-3">
                  <label for="recommendofbook_info" class="form-label">Kitap Açıklaması</label>
                  <textarea class="form-control" name="recommendofbook_info" id="recommendofbook_info" rows="5"></textarea>
                </div>

                <div class="mb-3">
                  <label for="recommendofbook_img" class="form-label">Kitap Resmi</label>
                  <input class="form-control" type="file" id="recommendofbook_img" name="recommendofbook_img" accept="image/*" required>
                </div>

                <div>
                  <input type="submit" name="add_recommendofbook" id="add_recommendofbook" class="btn btn-lg btn-success mt-5" style="display:flex; margin:auto;">
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
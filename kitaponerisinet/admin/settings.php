<?php
session_start();

$admin_username = $_SESSION['admin_username'];
$admin_password = $_SESSION['admin_password'];

include('tools/connect.php');
include('query-admin.php');

?>




<!doctype html>
<html lang="en">
<head>
  <title>kitaponerisi.net | Admin | Kişisel Bilgiler</title>
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
        <b><i><h6 class="text-end mt-3 mb-5">Admin / Ayarlar / Kişisel Bilgiler</h6></i></b>
      </div>
      <div class="col-12 bg-light pb-5 mb-5" style="border-radius: 20px; border:solid 1px light;">
        <div class="card-deck m-5">
          <div class="card col-12 mb-5" style="align-items:center; border:solid 1px white; box-shadow:1px 1px 5px 1px">        
            <div class="card-body col-5 m-5">
              <form action="process.php" method="POST">
                <h1 class="mb-5 text-center"><i><b>Kişisel Bilgiler</b></i></h1>
                <?php foreach($adminList as $list) { ?>
                <div class="mt-4">
                  <label for="admin_name" class="form-label">Ad</label>
                  <input type="text" class="form-control" name="admin_name" id="admin_name" 
                  value="<?= $list->admin_name ?>" placeholder="<?= $list->admin_name ?>">
                </div>
                <div class="mt-4">
                  <label for="admin_surname" class="form-label">Soyad</label>
                  <input type="text" class="form-control" name="admin_surname" id="admin_surname"
                  value="<?= $list->admin_surname ?>" placeholder="<?= $list->admin_surname ?>">
                </div>
                <div class="mt-4">
                  <label for="gender_type">Cinsiyet</label>
                  <select class="form-control mt-2" id="gender_type" name="gender_type">
                      <option value="<?= $list->gender_type ?>"><?= $list->gender_type ?></option>
                      <option value="Erkek">Erkek</option>
                      <option value="Kadın">Kadın</option>
                  </select>
                </div>
                <div class="mt-4">
                  <label for="admin_telephone" class="form-label">Telefon</label>
                  <input type="text" maxlength="10" class="form-control" name="admin_telephone" id="admin_telephone" 
                  value="<?= $list->admin_telephone ?>" placeholder="<?= $list->admin_telephone ?>">
                </div>
                <div class="mt-4">
                  <label for="admin_mail" class="form-label">Email</label>
                  <input type="email" class="form-control" name="admin_mail" id="admin_mail" 
                  value="<?= $list->admin_mail ?>" placeholder="<?= $list->admin_mail ?>">
                </div>
                <div class="mt-4 mb-4">
                  <input type="submit" name="update_admin_info" id="update_admin_info" class="btn btn-lg btn-success mt-5" style="display:flex; margin:auto;">
                </div>
                <?php } ?>
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
<?php
session_start();

$admin_username = $_SESSION['admin_username'];
$admin_password = $_SESSION['admin_password'];

include('tools/connect.php');
include('query-user.php');


?>




<!doctype html>
<html lang="en">
<head>
  <title>kitaponerisi.net | Admin | Kullanıcı Listesi</title>
  <link href="/kitaponerisinet/tools/img/kitaponerisinet.png" rel="icon">
  <meta charset="utf-8">
  <meta name="description" content="Okuduğun kitaplardan yola çıkarak sana en uygun kitapların önerisini kitaponerisi.net'ten alabilirsin!">
  <meta name="keywords" content="kitap,oneri,kitaponerisi,roman,siir">
  <meta name="author" content="Hakan KUMAŞ">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <?php include("partials/cdn-fontawesome.php");?>
    <?php include("partials/cdn-jquery.php");?>
  <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
  <link rel="stylesheet" href="partials/page_up.css">

</head>
<body>
  <!-- NAVBAR START -->
  <?php include("partials/navbar.php");?>
  <!-- NAVBAR FINISH -->

  <div class="container mt-3">
    <div class="row">
      <div class="col-12">
        <b><i><h6 class="text-end mt-3 mb-5">Admin / Kullanıcı / Kullanıcı Listesi</h6></i></b>
      </div>
      <div class="col-12 rounded mb-5 p-5" style="background-color:aliceblue; border:solid 1px light; box-shadow:1px 1px 5px 1px">
        <table id="exampleDatatable" class="display" style="width:100%">
          <h1 class="text-center"><i><b>Kullanıcı Listesi</b></i></h1>
          <thead>
            <tr>
              <th style="width: 10%;">Kullanıcı Adı</th>
              <th style="width: 15%;">Ad</th>
              <th style="width: 15%;">Soyad</th>
              <th style="width: 10%;">Cinsiyet</th>
              <th style="width: 10%;">Telefon</th>
              <th style="width: 20%;">Mail</th>
              <th style="width: 15%;">Kayıt Tarihi</th>
              <th style="width: 5%; text-align:center">Sil</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($userList as $user) { ?>
            <tr>
              <td><?= "@".$user->user_username ?></td>
              <td><?= $user->user_name ?></td>
              <td><?= $user->user_surname ?></td>
              <td><?= $user->gender_type ?></td>
              <td><?= $user->user_telephone ?></td>
              <td><?= $user->user_mail ?></td>
              <td><?= $user->user_registerDate ?></td>
              <td class="pe-4" style="text-align:center;"><a href="delete.php?user_id=<?= $user->user_id ?>" class="btn btn-danger text-white">Sil</a></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
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
  
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>    
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  <script>
    new DataTable('#exampleDatatable', {
      paging: false,
      scrollCollapse: true,
      scrollY: '80vh'
    });
  </script>
</body>
</html>
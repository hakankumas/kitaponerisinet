<?php 

include('tools/connect.php');
include('query-countAdmin.php');
include('query-countUser.php');
include('query-countAnnounce.php');
include('query-countRecommendofbook.php');
include('query-countUserBook.php');
include('query-countUsertoAdmin.php');
include('query-most_read_types.php');
include('query-most_read_by_users.php');


?>


<!doctype html>
<html lang="en">
<head>
  <title>kitaponerisi.net | Admin | Ana Sayfa</title>
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

    <style>
      .line-clamp10{
        display: -webkit-box;
        -webkit-line-clamp: 10;
        -webkit-box-orient: vertical;
        overflow: hidden;
      }
    </style>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Topping');
      data.addColumn('number', 'Slices');
      data.addRows([
          <?php
          foreach($most_read_types_list as $most_read_types) {
              echo "['".$most_read_types->typeofbook_name."',".$most_read_types->numberoftype."],";
          }
          ?>
      ]);
      var options = {'width':500,'height':476};
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options);
    }
  </script>
</head>
<body>
  <!-- NAVBAR START -->
  <?php include("partials/navbar.php");?>
  <!-- NAVBAR FINISH -->

  <div class="container mt-3">
    <div class="row">
      <div class="col-12">
        <b><i><h2 class="text-center mt-3 mb-5">kitaponerisi.net | Dashboard</h2></i></b>
      </div>
      <div class="col-12 bg-light pb-5 mb-5" style="border-radius: 20px; border:solid 1px light; box-shadow:1px 1px 5px 1px;">
        <div class="card-deck m-5">
          <div class="card col-3 mb-5" style="float:left; margin-left:6%; align-items:center; border:solid 1px white; box-shadow:1px 1px 5px 1px; background-color: #badbfe;">
            <h1 class="mt-4"><i class="fa fa-user text-dark"></i></h1>
            <div class="card-body">
              <h4 class="card-title text-center">Admin</h4>
              <?php foreach($countAdminList as $countAdmin) { ?>
              <h1 class="card-text text-center" style="text-align:justify;"><?= $countAdmin->number ?></h1>
              <?php } ?>
            </div>
          </div>
          <div class="card col-3 mb-5" style="float:left; margin-left:6%; align-items:center; border:solid 1px white; box-shadow:1px 1px 5px 1px; background-color: #badbfe;">
            <h1 class="mt-4"><i class="fa fa-users text-dark"></i></h1>
            <div class="card-body">
              <h4 class="card-title text-center">Kullanıcı</h4>
              <?php foreach($countUserList as $countUser) { ?>
              <h1 class="card-text text-center" style="text-align:justify;"><?= $countUser->number ?></h1>
              <?php } ?>
            </div>
          </div>
          <div class="card col-3 mb-5" style="float:left; margin-left:6%; align-items:center; border:solid 1px white; box-shadow:1px 1px 5px 1px; background-color: #badbfe;">
            <h1 class="mt-4"><i class="fa fa-bullhorn text-dark"></i></h1>
            <div class="card-body">
              <h4 class="card-title text-center">Duyuru</h4>
              <?php foreach($countAnnounceList as $countAnnounce) { ?>
              <h1 class="card-text text-center" style="text-align:justify;"><?= $countAnnounce->number ?></h1>
              <?php } ?>
            </div>
          </div>
          <div class="card col-3 mb-5" style="float:left; margin-left:6%; align-items:center; border:solid 1px white; box-shadow:1px 1px 5px 1px; background-color: #badbfe;">
            <h1 class="mt-4"><i class="fa fa-share-alt text-dark"></i></h1>
            <div class="card-body">
              <h4 class="card-title text-center">Kitap Önerisi</h4>
              <?php foreach($countRecommendofbookList as $countRecommendofbook) { ?>
              <h1 class="card-text text-center" style="text-align:justify;"><?= $countRecommendofbook->number ?></h1>
              <?php } ?>
            </div>
          </div>
          <div class="card col-3 mb-5" style="float:left; margin-left:6%; align-items:center; border:solid 1px white; box-shadow:1px 1px 5px 1px; background-color: #badbfe;">
            <h1 class="mt-4"><i class="fa fa-book text-dark"></i></h1>
            <div class="card-body">
              <h4 class="card-title text-center">Okunan Kitap</h4>
              <?php foreach($countUserBookList as $countUserBook) { ?>
              <h1 class="card-text text-center" style="text-align:justify;"><?= $countUserBook->number ?></h1>
              <?php } ?>
            </div>
          </div>
          <div class="card col-3 mb-5" style="float:left; margin-left:6%; align-items:center; border:solid 1px white; box-shadow:1px 1px 5px 1px; background-color: #badbfe;">
            <h1 class="mt-4"><i class="fa fa-envelope text-dark"></i></h1>
            <div class="card-body">
              <h4 class="card-title text-center">Talep Mesajları</h4>
              <?php foreach($countUsertoAdminList as $countUsertoAdmin) { ?>
              <h1 class="card-text text-center" style="text-align:justify;"><?= $countUsertoAdmin->number ?></h1>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 bg-light pb-5 mb-5 pt-5 mt-5" style="border-radius: 20px; border:solid 1px light; box-shadow:1px 1px 5px 1px;">
        <div class="card-deck mt-5 ">
          <div class="card col-5 mb-5" style="float:left; margin-left:6%; align-items:center; border:solid 1px white; box-shadow:1px 1px 5px 1px; background-color: #badbfe;">
            <div class="card-header">
              <h1 class="card-title mt-4 text-center"><i>En Çok Okunan 5 Kitap Türü</i></h1>        
            </div>
            <div class="card-body">
              <div class="chart_body" style="display: flex; margin:auto;">
                  <div class="rounded border border-3 border-light" id="piechart" style="display: flex; margin:auto; border:solid 1px white; box-shadow: 1px 1px 5px 1px"></div>
              </div>
            </div>
          </div>
          <div class="card col-5 mb-5" style="float:left; margin-left:6%; align-items:center; border:solid 1px white; box-shadow:1px 1px 5px 1px; background-color: #badbfe;">
            <div class="card-header">
              <h1 class="card-title mt-4 text-center"><i>En Çok Kitap Okuyan 10 Kullanıcı</i></h1>        
            </div>
            <div class="card-body">
              <table class="table table-hover rounded mt-3 mb-3" style="background-color:aliceblue;">
                <thead>
                  <tr>
                    <th class="ps-4" style="width: 200px;">Kullanıcı Adı</th>
                    <th style="width: 200px; text-align:center;">Kitap Sayısı</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($most_read_by_users_list as $most_read_by_users) { ?>
                  <tr>
                    <td class="ps-4"><?= "@".$most_read_by_users->user_username ?></td>
                    <td style="text-align:center;"><?= $most_read_by_users->number_of_total_read_book ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
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
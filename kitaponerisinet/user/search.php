<title>kitaponerisi.net | Kullanıcı | Arama</title>
<link href="/kitaponerisinet/tools/img/kitaponerisinet.png" rel="icon">
<meta charset="utf-8">
<meta name="description" content="Okuduğun kitaplardan yola çıkarak sana en uygun kitapların önerisini kitaponerisi.net'ten alabilirsin!">
<meta name="keywords" content="kitap,oneri,kitaponerisi,roman,siir">
<meta name="author" content="Hakan KUMAŞ">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<?php

include("tools/connect.php");


// KULLANICI, ANA SAYFA KISMINDAN KİTABIN DETAYLARINI GÖRMEK İSTEDİĞİNDE YAPILAN İŞLEM //
if(isset($_GET["recommendofbook_id"])){
    $search = $_GET["recommendofbook_id"];

    header("location: detailsofbook.php?recommendofbook_id=$search");

}


// KULLANICI, TÜM KİTAPLAR KISMINDAN KİTABIN DETAYLARINI GÖRMEK İSTEDİĞİNDE YAPILAN İŞLEM //
if(isset($_GET["allBook_id"])){
    $search = $_GET["allBook_id"];

    header("location: detailsofbook.php?recommendofbook_id=$search");

}








?>
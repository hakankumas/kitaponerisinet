<title>kitaponerisi.net | Kullanıcı | Çıkış</title>
<link href="/kitaponerisinet/tools/img/kitaponerisinet.png" rel="icon">
<meta charset="utf-8">
<meta name="description" content="Okuduğun kitaplardan yola çıkarak sana en uygun kitapların önerisini kitaponerisi.net'ten alabilirsin!">
<meta name="keywords" content="kitap,oneri,kitaponerisi,roman,siir">
<meta name="author" content="Hakan KUMAŞ">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">


<?php
session_start();
session_destroy();
header("location:/kitaponerisinet/index.php");
?>
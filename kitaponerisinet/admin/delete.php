<link href="/kitaponerisinet/tools/img/kitaponerisinet.png" rel="icon">
<title>kitaponerisi.net | Admin | Sil</title>

<?php
include("tools/connect.php");


// KULLANICI SİL //
if(isset($_GET["user_id"])){
    $query = $db->prepare('DELETE FROM user WHERE user_id=?');
    $resault = $query->execute([$_GET['user_id']]);
    if($resault){
        echo "<script>alert('Kullanıcı Silme İşleminiz Gerçekleştirildi!')</script>";
        header("refresh:0; edit_user.php");
    }else{
        echo 0;
    }
}


// KİTAP SİL //
if(isset($_GET["recommendofbook_id"])){
    $query = $db->prepare('DELETE FROM recommendofbook WHERE recommendofbook_id=?');
    $resault = $query->execute([$_GET['recommendofbook_id']]);
    if($resault){
        echo "<script>alert('Kitap Silme İşleminiz Gerçekleştirildi!')</script>";
        header("refresh:0; edit_recommendofbook.php");
    }else{
        echo 0;
    }
}




















?>
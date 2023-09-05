<link href="/kitaponerisinet/tools/img/kitaponerisinet.png" rel="icon">
<title>kitaponerisi.net | Kullanıcı | Kitap Sil</title>

<?php
include("tools/connect.php");


// KİTAP SİL //
if(isset($_GET["bookofuserList"])){
    $query = $db->prepare('DELETE FROM user_book WHERE user_book_id=?');
    $resault = $query->execute([$_GET['bookofuserList']]);
    if($resault){
        echo "<script>alert('Kitap Silme İşleminiz Gerçekleştirildi!')</script>";
        header("refresh:0; edit_book.php");
    }else{
        echo 0;
    }
}




















?>
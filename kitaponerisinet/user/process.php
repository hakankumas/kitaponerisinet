<title>kitaponerisi.net | Kullanıcı | İşlemler</title>
<link href="/kitaponerisinet/tools/img/kitaponerisinet.png" rel="icon">
<meta charset="utf-8">
<meta name="description" content="Okuduğun kitaplardan yola çıkarak sana en uygun kitapların önerisini kitaponerisi.net'ten alabilirsin!">
<meta name="keywords" content="kitap,oneri,kitaponerisi,roman,siir">
<meta name="author" content="Hakan KUMAŞ">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">


<?php
include('tools/connect.php');
session_start();

// KULLANICININ ŞİFRESİNİ GÜNCELLEME İŞLEMİ //
if(isset($_POST["update_user_password"])){
    $user_username = $_SESSION["user_username"];
    $user_password = $_SESSION["user_password"];
    $now_user_password = $_POST["now_user_password"];
    $new_user_password = $_POST["new_user_password"];
    $new2_user_password = $_POST["new2_user_password"];

    $query = $db->prepare("SELECT * FROM user WHERE user_username = '$user_username' AND user_password = '$user_password'");
    $add_data = $query->execute();
    if($user_password == $now_user_password){
        if($new_user_password != $new2_user_password){
            echo "<script>alert('Yeni şifreler örtüşmemektedir. Tekrar Deneyiniz...');</script>";
            header('Refresh:0; password.php');
        }elseif($user_password == $new_user_password){
            echo "<script>alert('Şifreler zaten aynı! Tekrar Deneyiniz...');</script>";
            header('Refresh:0; password.php');
        }else{
            $query2 = $db->prepare("UPDATE user SET user_password =? 
            WHERE user_username = '$user_username' AND user_password = '$user_password'");
            $add_data = $query2->execute([$new2_user_password]);
            if($add_data){
                $_SESSION["user_password"] = $new_user_password;
                echo "<script>alert('Şifreniz Başarıyla Güncellendi!');</script>";
                header('Refresh:0; password.php');
            }
        }
    }elseif($user_password != $now_user_password){
        echo "<script>alert('Mevcut şifreniz doğru değil!');</script>";
        header('Refresh:0; password.php');
    }else{
        echo 0;
    }
}


// KULLANICININ BİLGİLERİNİ GÜNCELLEME İŞLEMİ //
if(isset($_POST['update_user_info'])){
    $user_username = $_SESSION['user_username'];
    $user_password = $_SESSION['user_password'];

    $user_name = $_POST['user_name'];
    $user_surname = $_POST['user_surname'];
    $gender_type = $_POST['gender_type'];
    $user_telephone = $_POST['user_telephone'];
    $user_mail = $_POST['user_mail'];

    $user_name = Transliterator::create('tr-title')->transliterate($user_name);
    $user_surname = Transliterator::create('tr-upper')->transliterate($user_surname);

    $query = $db->prepare("UPDATE user SET user_name = ? , user_surname = ? , gender_type = ? , user_telephone = ? , user_mail = ? WHERE user_username = '$user_username'");
    $add_data = $query->execute([$user_name, $user_surname, $gender_type, $user_telephone, $user_mail]);

    if($add_data){
        echo "<script>alert('İşleminiz Başarıyla Gerçekleştirildi!');</script>";
        header("refresh:0; settings.php");
    }else{
        echo "<script>alert('Bir Hatayla Karşılandı...');</script>";
        header("refresh:0 settings.php");
    }
}

// YENİ KULLANICI KAYIT İŞLEMİ //
if(isset($_POST['create_user'])){
    $user_username = $_POST["user_username"];
    $user_password = $_POST["user_password"];

    $query = $db->prepare('SELECT * FROM user WHERE user_username =?');
    $query->execute([$user_username]);
    $user_list = $query->fetchAll(PDO::FETCH_OBJ);
    
    if($user_list != NULL){
        echo "<script>alert('Bu kullanıcı adı zaten kullanılmaktadır. Lütfen başka bir kullanıcı adı seçiniz!');</script>";
        header("Refresh:0; /kitaponerisinet/create-user.php");

    }elseif($user_list == NULL){
        $query2 = $db->prepare('INSERT INTO user(user_username, user_password) VALUES (?,?)');
        $add_data = $query2->execute([$user_username, $user_password]);
            if($add_data){
            echo "<script>alert('İşleminiz Başarıyla Gerçekleştirilmiştir.');</script>";
            header('Refresh:0; /kitaponerisinet/login-user.php');
            }else{
                echo "<script>alert('Bir Hata Oluştu. Tekrar Deneyiniz...');</script>";
                header('Refresh:0; /kitaponerisinet/create-user.php');
            }
    }else{
        echo "<script>alert('Bir Hata Oluştu. Tekrar Deneyiniz...');</script>";
        header('Refresh:0; /kitaponerisinet/create-user.php');
    }

}


// KULLANICININ OKUDUĞU KİTABI EKLEME İŞLEMİ //
if(isset($_POST['add_user_book'])){
    $user_username = $_SESSION['user_username'];
    $book_name = $_POST['book_name'];
    $typeofbook_name = $_POST['typeofbook_name'];
    $book_name = Transliterator::create('tr-title')->transliterate($book_name);

    $query = $db->prepare("INSERT INTO user_book SET user_username = ? , book_name = ? , typeofbook_name = ?");
    $add_data = $query->execute([$user_username, $book_name, $typeofbook_name]);

    if($add_data){
        echo "<script>alert('İşleminiz Başarıyla Gerçekleştirildi!');</script>";
        header("refresh:0; add_book.php");
    }else{
        echo "<script>alert('Bir Hatayla Karşılandı...');</script>";
        header("refresh:0 add_book.php");
    }
}


// KULLANICIDAN ADMİNE TALEP MESAJI EKLEME İŞLEMİ //
if(isset($_POST['add_usertoadmin_message'])){
    $user_username = $_SESSION['user_username'];
    $usertoadmin_message_title = $_POST['usertoadmin_message_title'];
    $usertoadmin_message_content = $_POST['usertoadmin_message_content'];

    $query = $db->prepare("INSERT INTO usertoadmin_message SET user_username = ? , usertoadmin_message_title = ? , usertoadmin_message_content = ?");
    $add_data = $query->execute([$user_username, $usertoadmin_message_title, $usertoadmin_message_content]);

    if($add_data){
        echo "<script>alert('İşleminiz Başarıyla Gerçekleştirildi!');</script>";
        header("refresh:0; requestfromadmin.php");
    }else{
        echo "<script>alert('Bir Hatayla Karşılandı...');</script>";
        header("refresh:0 requestfromadmin.php");
    }
}









































?>
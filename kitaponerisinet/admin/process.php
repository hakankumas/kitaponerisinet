<?php
include('tools/connect.php');
session_start();

// ADMİNİN ŞİFRESİNİ GÜNCELLEME İŞLEMİ //
if(isset($_POST["update_admin_password"])){
    $admin_username = $_SESSION["admin_username"];
    $admin_password = $_SESSION["admin_password"];
    $now_admin_password = $_POST["now_admin_password"];
    $new_admin_password = $_POST["new_admin_password"];
    $new2_admin_password = $_POST["new2_admin_password"];

    $query = $db->prepare("SELECT * FROM admin WHERE admin_username = '$admin_username' AND admin_password = '$admin_password'");
    $add_data = $query->execute();
    if($admin_password == $now_admin_password){
        if($new_admin_password != $new2_admin_password){
            echo "<script>alert('Yeni şifreler örtüşmemektedir. Tekrar Deneyiniz...');</script>";
            header('Refresh:0; password.php');
        }elseif($admin_password == $new_admin_password){
            echo "<script>alert('Şifreler zaten aynı! Tekrar Deneyiniz...');</script>";
            header('Refresh:0; password.php');
        }else{
            $query2 = $db->prepare("UPDATE admin SET admin_password =? 
            WHERE admin_username = '$admin_username' AND admin_password = '$admin_password'");
            $add_data = $query2->execute([$new2_admin_password]);
            if($add_data){
                $_SESSION["admin_password"] = $new_admin_password;
                echo "<script>alert('Şifreniz Başarıyla Güncellendi!');</script>";
                header('Refresh:0; password.php');
            }
        }
    }elseif($admin_password != $now_admin_password){
        echo "<script>alert('Mevcut şifreniz doğru değil!');</script>";
        header('Refresh:0; password.php');
    }else{
        echo 0;
    }
}

// ADMİNİN BİLGİLERİNİ GÜNCELLEME İŞLEMİ //
if(isset($_POST['update_admin_info'])){
    $admin_username = $_SESSION['admin_username'];
    $admin_password = $_SESSION['admin_password'];

    $admin_name = $_POST['admin_name'];
    $admin_surname = $_POST['admin_surname'];
    $gender_type = $_POST['gender_type'];
    $admin_telephone = $_POST['admin_telephone'];
    $admin_mail = $_POST['admin_mail'];

    $admin_name = Transliterator::create('tr-title')->transliterate($admin_name);
    $admin_surname = Transliterator::create('tr-upper')->transliterate($admin_surname);

    $query = $db->prepare("UPDATE admin SET admin_name = ? , admin_surname = ? , gender_type = ? , admin_telephone = ? , admin_mail = ? WHERE admin_username = '$admin_username'");
    $add_data = $query->execute([$admin_name, $admin_surname, $gender_type, $admin_telephone, $admin_mail]);

    if($add_data){
        echo "<script>alert('İşleminiz Başarıyla Gerçekleştirildi!');</script>";
        header("refresh:0; settings.php");
    }else{
        echo "<script>alert('Bir Hatayla Karşılandı...');</script>";
        header("refresh:0 settings.php");
    }
}


// DUYURU YAYINLAMA İŞLEMİ //
if(isset($_POST['add_announce'])){
    $path = $_POST['path'];
    $admin_username = $_SESSION['admin_username'];
    $admintouser_announce_title = $_POST['admintouser_announce_title'];
    $admintouser_announce_content = $_POST['admintouser_announce_content'];

    $admintouser_announce_title = Transliterator::create('tr-title')->transliterate($admintouser_announce_title);

    $query = $db->prepare("INSERT INTO admintouser_announce SET admin_username = ?,  admintouser_announce_title = ?, admintouser_announce_content = ?");
    $add_data = $query->execute([$admin_username, $admintouser_announce_title, $admintouser_announce_content]);

    if($add_data){
        echo "<script>alert('İşleminiz Başarıyla Gerçekleştirildi!');</script>";
        header("refresh:0; $path");
    }else{
        echo "<script>alert('Bir Hatayla Karşılandı...');</script>";
        header("refresh:0; $path");
    }
}


// MESAJ GÖNDERME İŞLEMİ //
if(isset($_POST['add_admintouser_message'])){
    $path = $_POST['path'];
    $admin_username = $_SESSION['admin_username'];
    $user_username = $_POST['user_username'];
    $admintouser_message_title = $_POST['admintouser_message_title'];
    $admintouser_message_content = $_POST['admintouser_message_content'];

    $admintouser_message_title = Transliterator::create('tr-title')->transliterate($admintouser_message_title);

    $query = $db->prepare("INSERT INTO admintouser_message SET admin_username = ?, user_username = ?, admintouser_message_title = ?, admintouser_message_content = ?");
    $add_data = $query->execute([$admin_username, $user_username, $admintouser_message_title, $admintouser_message_content]);

    if($add_data){
        echo "<script>alert('İşleminiz Başarıyla Gerçekleştirildi!');</script>";
        header("refresh:0; $path");
    }else{
        echo "<script>alert('Bir Hatayla Karşılandı...');</script>";
        header("refresh:0; $path");
    }
}









































?>
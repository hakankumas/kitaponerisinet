<?php
include('connect.php');
session_start();


// ADMİN GİRİŞİ //
if(isset($_POST["admin_login"])){

    $admin_username = $_POST["admin_username"];
    $admin_password = $_POST["admin_password"];

    $query = $db->prepare("SELECT * FROM admin WHERE admin_username = ? AND admin_password = ?");
    $query->execute([$admin_username, $admin_password]);
    $count = $query->rowCount();
    if($count>0){
        $_SESSION["admin_username"] = $_POST["admin_username"];
        $_SESSION["admin_password"] = $_POST["admin_password"];
        $_SESSION["session"] = true;
        echo "<script>alert('Hoş Geldiniz');</script>";
        header("refresh:0 /kitaponerisinet/admin/index.php");
    }else{
        echo "<script>alert('Giriş Bilgileriniz Yanlış!');</script>";
        header("refresh:0 /kitaponerisinet/login-admin.php");
    }
}

// KULLANICI GİRİŞİ //
if(isset($_POST["user_login"])){

    $user_username = $_POST["user_username"];
    $user_password = $_POST["user_password"];

    $query = $db->prepare("SELECT * FROM user WHERE user_username = ? AND user_password = ?");
    $query->execute([$user_username, $user_password]);
    $count = $query->rowCount();
    if($count>0){
        $_SESSION["user_username"] = $_POST["user_username"];
        $_SESSION["user_password"] = $_POST["user_password"];
        $_SESSION["session"] = true;
        echo "<script>alert('Hoş Geldiniz');</script>";
        header("refresh:0 /kitaponerisinet/user/index.php");
    }else{
        echo "<script>alert('Giriş Bilgileriniz Yanlış!');</script>";
        header("refresh:0 /kitaponerisinet/login-user.php");
    }
}


// ADMİN'İN KİTAP ÖNERİSİ EKLEME İŞLEMİ //
if(isset($_POST['add_recommendofbook'])){
    $recommendofbook_name = $_POST['recommendofbook_name'];
    $typeofbook_name = $_POST['typeofbook_name'];
    $recommendofbook_author = $_POST['recommendofbook_author'];
    $recommendofbook_publisher = $_POST['recommendofbook_publisher'];
    $recommendofbook_translator = $_POST['recommendofbook_translator'];
    $recommendofbook_ISBN = $_POST['recommendofbook_ISBN'];
    $recommendofbook_language = $_POST['recommendofbook_language'];
    $recommendofbook_numberofpage = $_POST['recommendofbook_numberofpage'];
    $recommendofbook_info = $_POST['recommendofbook_info'];

    $recommendofbook_name = Transliterator::create('tr-title')->transliterate($recommendofbook_name);
    $recommendofbook_author = Transliterator::create('tr-title')->transliterate($recommendofbook_author);
    $recommendofbook_publisher = Transliterator::create('tr-title')->transliterate($recommendofbook_publisher);
    $recommendofbook_translator = Transliterator::create('tr-title')->transliterate($recommendofbook_translator);
    $recommendofbook_language = Transliterator::create('tr-title')->transliterate($recommendofbook_language);

    $dest_path = "img/upload_book/";
    $filename = $_FILES['recommendofbook_img']['name'];
    $fileSourcePath = $_FILES['recommendofbook_img']['tmp_name'];
    $dosyaAdi = explode(".", $filename); 
    $dosyaAdi_uzantisiz = $dosyaAdi[0];
    $dosyaAdi_uzantisi = $dosyaAdi[1];
    $yeni_dosyaAdi = md5(time().$dosyaAdi_uzantisiz).'.'.$dosyaAdi_uzantisi;
    $fileDestPath = $dest_path.$yeni_dosyaAdi;
    
    if(move_uploaded_file($fileSourcePath, $fileDestPath)){
        $recommendofbook_img = "/kitaponerisinet/tools/".$fileDestPath;
        $query = $db->prepare("INSERT INTO recommendofbook SET recommendofbook_name = ?,  typeofbook_name = ?, recommendofbook_author = ?, recommendofbook_publisher = ?, recommendofbook_translator = ?, recommendofbook_ISBN = ?, recommendofbook_language = ?, recommendofbook_numberofpage = ?, recommendofbook_info = ?, recommendofbook_img = ?");
        $add_data = $query->execute([$recommendofbook_name, $typeofbook_name, $recommendofbook_author, $recommendofbook_publisher, $recommendofbook_translator, $recommendofbook_ISBN, $recommendofbook_language, $recommendofbook_numberofpage, $recommendofbook_info, $recommendofbook_img]);
    
        if($add_data){
            echo "<script>alert('İşleminiz Başarıyla Gerçekleştirilmiştir.');</script>";
            header("Refresh:0; /kitaponerisinet/admin/add_recommendofbook.php");   
        }else{
            echo "<script>alert('Bir Hata Oluştu. Tekrar Deneyiniz...');</script>";
            header('Refresh:0; /kitaponerisinet/admin/add_recommendofbook.php');
        }
    }else{
        echo "<script>alert('Bir Hata Oluştu. Tekrar Deneyiniz...');</script>";
        header('Refresh:0; /kitaponerisinet/admin/add_recommendofbook.php');
    }

}


// ÜYE OLMAYAN KİŞİLERİN ATTIĞI MESAJLARIN İŞLEMİ //

if(isset($_POST['add_nonusertoadmin_message'])){
    $nonusertoadmin_message_name = $_POST['nonusertoadmin_message_name'];
    $nonusertoadmin_message_surname = $_POST['nonusertoadmin_message_surname'];
    $nonusertoadmin_message_mail = $_POST['nonusertoadmin_message_mail'];
    $nonusertoadmin_message_title = $_POST['nonusertoadmin_message_title'];
    $nonusertoadmin_message_content = $_POST['nonusertoadmin_message_content'];

    $query = $db->prepare("INSERT INTO nonusertoadmin_message SET 
                                                                nonusertoadmin_message_name = ? , 
                                                                nonusertoadmin_message_surname = ? , 
                                                                nonusertoadmin_message_mail = ? , 
                                                                nonusertoadmin_message_title = ? , 
                                                                nonusertoadmin_message_content = ?");
    $add_data = $query->execute([$nonusertoadmin_message_name, 
                                    $nonusertoadmin_message_surname, 
                                    $nonusertoadmin_message_mail, 
                                    $nonusertoadmin_message_title, 
                                    $nonusertoadmin_message_content]);

    if($add_data){
        echo "<script>alert('İşleminiz Başarıyla Gerçekleştirildi!');</script>";
        header("refresh:0; /kitaponerisinet/index.php");
    }else{
        echo "<script>alert('Bir Hatayla Karşılandı...');</script>";
        header("refresh:0 /kitaponerisinet/index.php");
    }
}










?>

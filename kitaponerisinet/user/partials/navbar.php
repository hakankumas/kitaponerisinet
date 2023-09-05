    <nav class="navbar navbar-expand-sm navbar-dark bg-primary" id="navbar_id">
      <div class="container-fluid">
        <i><a class="navbar-brand ps-2 pe-2" href="index.php" style="font-weight: bolder;">kitaponerisi.net</a></i>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2">
                <li class="nav-item me-2 mb-1">
                    <a class="nav-link active" href="index.php" aria-current="page">Ana Sayfa <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item me-2 mb-1">
                    <a class="nav-link" href="discover.php" aria-current="page">Keşfet<span class="visually-hidden"></span></a>
                </li>
                <li class="nav-item dropdown me-2 mb-1">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kitap</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="add_book.php">Kitap Ekle</a>
                        <a class="dropdown-item" href="edit_book.php">Kitap Bilgisi</a>
                    </div>
                </li>
            </ul>
            <button type="button" class="btn btn-lg btn-primary text-white ps-4 pe-4" id="btn_bullhorn" data-target="#modal_bullhorn" data-toggle="modal" title="Yönetici Duyuruları"><i class="fa fa-bullhorn"></i></button>
            <button type="button" class="btn btn-lg btn-primary text-white ps-4 pe-4" id="btn_envelope" data-target="#modal_envelope" data-toggle="modal" title="Yönetici Mesajları"><i class="fa fa-envelope"></i></button>

            <!-- <a class="btn btn-lg btn-primary text-white ps-4 pe-4" data-target="#modal_bullhorn" data-toggle="modal" title="Yönetici Duyuruları"><i class="fa fa-bullhorn"></i></a> -->
            <!-- <a class="btn btn-lg btn-primary text-white ps-4 pe-4" data-target="#modal_envelope" data-toggle="modal" title="Yönetici Mesajları"><i class="fa fa-envelope"></i></a> -->
            <ul class="navbar-nav ps-4 pe-4">
                <li class="nav-item dropdown">
                    <a class="nav-link text-white" href="#" id="dropdownId2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId2">
                        <a class="dropdown-item" href="settings.php">Kişisel Bilgiler</a>
                        <a class="dropdown-item" href="password.php">Şifre Değişikliği</a>
                        <a class="dropdown-item" href="requestfromadmin.php">Talep Bildir</a>
                    </div>
                </li>
            </ul>
            <div class="d-flex" style="height: 35px; width:30px">
                <div class="vr" style="width:3px; color:azure"></div>
            </div>
            <div class="d-flex my-2 my-lg-0 me-3">
                <button type="button" class="btn btn-lg btn-outline-danger btn-primary text-white border-0 ps-4 pe-4" id="btn_out" data-target="#modal_out" data-toggle="modal" title="Çıkış Yap"><i class="fas fa-power-off"></i></button>
                <!-- <a href="out.php"><button class="btn btn-outline-dark my-2 my-sm-0 bg-danger">Çıkış Yap</button></a>  -->
            </div>
        </div>
      </div>
    </nav>


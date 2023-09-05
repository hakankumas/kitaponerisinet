<?php 

include('./tools/connect.php');
include('./query-announce.php');

?>


  <div class="modal fade" id="modal_bullhorn">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="text-end mt-2 me-2">
          <button type="button" id="modal_bullhorn_close1" class="btn bg-danger rounded border border-white" data-dismiss="modal"><i class="fa fa-close bg-danger text-white"></i></button>
        </div>
        <div class="text-center">
          <h3><i><b>Yönetici Duyuruları</b></i></h3>
        </div>
        <hr class="ms-5 me-5">
        <?php foreach ($announceList as $announce) { ?>
        <div class="modal-body ms-5 me-5">
          <h4><?= "@".$announce->admin_username ?></h4>
          <h5 class="text-center mt-4 mb-3"><?= $announce->admintouser_announce_title ?></h5>
          <p style="text-align:justify; text-indent:30px;"><?= $announce->admintouser_announce_content ?></p>
          <p class="text-end"><i><?= $announce->admintouser_announce_registerDate ?></i></p>
        </div>
        <hr class="ms-5 me-5">
        <?php } ?>
        <div class="modal-footer">
          <button type="button" id="modal_bullhorn_close2" class="btn btn-danger" data-dismiss="modal">Kapat</button>
        </div>
      </div>
    </div>
  </div>
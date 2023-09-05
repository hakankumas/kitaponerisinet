<?php 

include('./tools/connect.php');
include('./query-message.php');

?>
    
  <div class="modal fade" id="modal_envelope">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="text-end mt-2 me-2">
          <button type="button" id="modal_envelope_close1" class="btn bg-danger rounded border border-white" data-dismiss="modal"><i class="fa fa-close bg-danger text-white"></i></button>
        </div>
        <div class="text-center">
          <h3><i><b>Yönetici Mesajları</b></i></h3>
        </div>
        <hr class="ms-5 me-5">
        <?php foreach ($messageList as $message) { ?>
        <div class="modal-body ms-5 me-5">
          <h4><?= "@".$message->admin_username ?></h4>
          <h5 class="text-center mt-4 mb-3"><?= $message->admintouser_message_title ?></h5>
          <p style="text-align:justify; text-indent:30px;"><?= $message->admintouser_message_content ?></p>
          <p class="text-end"><i><?= $message->admintouser_message_registerDate ?></i></p>
        </div>
        <hr class="ms-5 me-5">
        <?php } ?>
        <div class="modal-footer">
          <button type="button" id="modal_envelope_close2" class="btn btn-danger" data-dismiss="modal">Kapat</button>
        </div>
      </div>
    </div>
  </div>
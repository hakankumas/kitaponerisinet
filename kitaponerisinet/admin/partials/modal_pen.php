<?php 

include('./tools/connect.php');
include('./query-user.php');

$path = $_SERVER['PHP_SELF'];

?>
    
  <div class="modal fade" id="modal_pen">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="text-end mt-2 me-2">
          <button type="button" id="modal_pen_close1" class="btn bg-danger rounded border border-white" data-dismiss="modal"><i class="fa fa-close bg-danger text-white"></i></button>
        </div>
        <div class="text-center">
          <h3><i><b>Mesaj Gönder</b></i></h3>
        </div>
        <hr class="ms-5 me-5">
        <form action="./process.php" method="POST">  
          <div class="modal-body ms-5 me-5">
            <div class="mt-4">
              <label for="user_username" class="form-label">Kullanıcı</label>
              <select class="form-select" name="user_username" id="user_username" required autofocus>
                <option value="" selected></option>
                <?php foreach($userList as $user) { ?>
                <option value="<?= $user->user_username ?>"><?= $user->user_username ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="mt-4">
              <label for="admintouser_message_title" class="form-label">Başlık</label>
              <textarea class="form-control" name="admintouser_message_title" id="admintouser_message_title" rows="2"></textarea>
            </div>
            <div class="mt-4">
              <label for="admintouser_message_content" class="form-label">Mesaj</label>
              <textarea class="form-control" name="admintouser_message_content" id="admintouser_message_content" rows="4"></textarea>
            </div>
            <div>
              <input type="hidden" name="path" value="<?= $path ?>">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" id="modal_pen_close2" class="btn btn-danger" data-dismiss="modal">Kapat</button>
            <input type="submit" name="add_admintouser_message" id="modal_pen_close2" class="btn btn-success" data-dismiss="modal"></input>
          </div>
        </form>
      </div>
    </div>
  </div>
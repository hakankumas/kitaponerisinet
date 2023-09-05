<?php 

$path = $_SERVER['PHP_SELF'];

?>
  
  <div class="modal fade" id="modal_bullhorn">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="text-end mt-2 me-2">
          <button type="button" id="modal_bullhorn_close1" class="btn bg-danger rounded border border-white" data-dismiss="modal"><i class="fa fa-close bg-danger text-white"></i></button>
        </div>
        <div class="text-center">
          <h3><i><b>Duyuru Yayınla</b></i></h3>
        </div>
        <hr class="ms-5 me-5">
        <form action="./process.php" method="POST">
          <div class="modal-body ms-5 me-5">
            <div class="mt-4">
              <label for="admintouser_announce_title" class="form-label">Duyuru Başlığı</label>
              <textarea class="form-control" name="admintouser_announce_title" id="admintouser_announce_title" rows="2" required autofocus></textarea>
            </div>
            <div class="mt-4">
              <label for="admintouser_announce_content" class="form-label">Duyuru Metni</label>
              <textarea class="form-control" name="admintouser_announce_content" id="admintouser_announce_content" rows="4" required></textarea>
            </div>
          </div>
          <input type="hidden" name="path" value="<?= $path ?>">
          <div class="modal-footer">
            <button type="button" id="modal_bullhorn_close2" class="btn btn-danger" data-dismiss="modal">Kapat</button>
            <input type="submit" name="add_announce" id="modal_bullhorn_close2" class="btn btn-success" data-dismiss="modal"></input>
          </div>
        </form>
      </div>
    </div>
  </div>
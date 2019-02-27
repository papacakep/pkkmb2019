<h1 class="text-white">a</h1>
<h4 class="text-white">a</h4>
<div class="container">
<h5><a href="<?= base_url(); ?>maba/Profil/profil_diri">Profil>></a>
<?php echo $title; ?></h5>
    <div class="text-center">
    <img src="#" alt="Foto" class="img-thumbnail rounded">
    </div>
    <form action="<?= base_url(); ?>maba/Profil/profil_diri" method="post">
        <div class="form-group">
            <label for="exampleFormControlFile1">Pilih Foto</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="button" class="btn alert-success" data-toggle="modal" data-target="#editModal">Ganti Foto</button>
    </form>
</div>
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Ganti Foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Foto berhasil diganti.
      </div>
      <div class="modal-footer">
        <a href="<?= base_url(); ?>admin/Indoor/profil" class="btn btn-primary">OK</a>
      </div>
    </div>
  </div>
</div>
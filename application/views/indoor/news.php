<h1 class="text-white">a</h1>
<h4 class="text-white">a</h4>
<div class="container">
<h5><?php echo $title; ?></h5>
<?php 
for ($x = 1; $x <= 10; $x++) {?>
  <div class="card shadow p-3 mb-5 bg-white rounded">
    <div class="card-body alert alert-success" role="alert">
      <h5>Berita Ke-<?php echo $x; ?></h5>
    </div>
    <span class="d-inline-block text-truncate" style="max-width: 650px;">
      Ini adalah isi berita yang tidak lengkap, untuk membaca berita yang lebih lengkap Klik...
      </span>
      <div class="dropdown">
        <button class="btn alert-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Aksi
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="<?= base_url(); ?>admin/Indoor/c_news">Baca</a>
        <a class="dropdown-item" href="<?= base_url(); ?>admin/Indoor/e_news">Edit</a>
        <a class="dropdown-item" href="<?= base_url(); ?>admin/Indoor/d_news" data-toggle="modal" data-target="#deleteModal">Hapus</a>
      </div>
      </div>
  </div>
<?php }?>
</div>
<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Menghapus Berita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda akan menghapus berita ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a href="<?= base_url(); ?>admin/Indoor/news" class="btn btn-primary">Ya</a>
      </div>
    </div>
  </div>
</div>
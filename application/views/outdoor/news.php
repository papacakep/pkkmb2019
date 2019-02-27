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
      <a href="<?= base_url(); ?>admin/Outdoor/c_news">Baca selengkapnya</a>
  </div>
<?php }?>
</div>

<h1 class="text-white">a</h1>
<h4 class="text-white">a</h4>
<div class="container">
<h5><a href="<?= base_url(); ?>admin/Kesehatan/news">News>></a> <?php echo $title; ?></h5>
  <div class="card shadow p-3 mb-5 bg-white rounded">
    <div class="card-body alert alert-success" role="alert">
      <h5>Berita Ke-n</h5>
    </div>
    <form action="" method="post">
      <div class="form-group">
        <label for="exampleFormControlInput1">Judul Berita</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul Berita">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Edit berita di sini</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="button" class="btn alert-success" data-toggle="modal" data-target="#editModal">Edit</button>
    </form>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalTitle">Mengedit Data Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Data berhasil diedit
      </div>
      <div class="modal-footer">
        <a href="<?= base_url(); ?>admin/Kesehatan/news" class="btn btn-primary">OK</a>
      </div>
    </div>
  </div>
</div>
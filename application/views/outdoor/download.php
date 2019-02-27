<h1 class="text-white">a</h1>
<h4 class="text-white">a</h4>
<div class="container">
<h5><?php echo $title; ?></h5>
<div class="shadow p-3 mb-5 bg-white rounded">
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header alert-success" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Data Mahasiswa
        </button>
      </h2>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      Melihat dan mendownload data mahasiswa yang terdiri dari NIM, Nama, Jenis Kelamin, Tempat dan Tanggal lahir, Asal Sekolah dan Nomor HP, yang ditampilkan dalam bentuk tabel.
     <a href="<?= base_url(); ?>Download/data">Download</a>|
     <a href="<?= base_url(); ?>admin/Outdoor/tabel_mhs">Lihat</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
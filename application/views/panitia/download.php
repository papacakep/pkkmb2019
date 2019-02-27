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
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      Melihat dan mendownload data mahasiswa yang terdiri dari NIM, Nama, Jenis Kelamin, Tempat dan Tanggal lahir, Asal Sekolah dan Nomor HP, yang ditampilkan dalam bentuk tabel.
     <a href="<?= base_url(); ?>Download/data">Download</a>|
     <a href="<?= base_url(); ?>admin/Panitia/tabel_mhs">Lihat</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header alert-success" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Rundown Kegiatan Indoor
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      Berupa Rundown Kegiatan Panitia dari awal sampai akhir selama dua hari, berikut materi dan tempat pelaksanaan.
     <a href="<?= base_url(); ?>Download/rundown_Panitia">Download</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header alert-success" id="headingSeven">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
        Materi Kegiatan Indoor
        </button>
      </h2>
    </div>
    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
      <div class="card-body">
      Mendownload seluruh materi yang akan diberikan pada kegiatan Panitia.
     <a href="<?= base_url(); ?>Download/materi_Panitia">Download</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header alert-success" id="headingFive">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Rundown Kegiatan Outdoor
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
      Berupa Rundown Kegiatan Panitia dari awal sampai akhir selama tiga hari, berikut materi, tempat pelaksanaan dan pendamping.
     <a href="<?= base_url(); ?>Download/rundown_outdoor">Download</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header alert-success" id="headingSix">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        SK Panitia
        </button>
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
      Mendownload SK Kepanitian PKKMB. 
      <a href="<?= base_url(); ?>Download/sk">Download</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
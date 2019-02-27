<h1 class="text-white">a</h1>
<h4 class="text-white">a</h4>
<div class="container">
<h5><?php echo $title; ?></h5>

<div class="card shadow p-3 mb-5 bg-white rounded">
    <div class="card-body text-center" role="alert">
      <h5 class="text-success">PERHATIAN</h5>
    </div>
      <p class="card-text alert alert-success">Anda belum dapat mengunduh apapun, karena anda belum melengkapi <a href="<?= base_url(); ?>maba/Profil/profil_diri">Data Diri</a>. Silakan melengkapi <a href="<?= base_url(); ?>maba/Profil/profil_diri">Data Diri</a> agar dapat mengunduh Kartu Peserta, Pembekalan Indoor, Rundown Kegiatan Indoor, Pembekalan Outdoor, Rundown Kegiatan Outdoor dan Sertifikat PKKMB.
    </p>
  </div>

<div class="shadow p-3 mb-5 bg-white rounded">
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header alert-success" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Kartu Peserta
        </button>
      </h2>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      Kartu Peserta PKKMB berupa identitas yang terdiri dari NIM, Nama, Prodi, Foto dan QR Code yang dapat digunakan untuk proses presensi.
     <a href="<?= base_url(); ?>Download/kartu">Download</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header alert-success" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Pembekalan Indoor
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      Pembekalan Indoor berupa tanggal, waktu dan tempat pelaksanaan Pembekalan, serta seragam yang dipakai dan perbekalan saat pembekalan. 
     <a href="<?= base_url(); ?>Download/bekal_indoor">Download</a>
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
      Berupa Rundown Kegiatan Indoor dari awal sampai akhir selama dua hari, berikut materi dan tempat pelaksanaan.
     <a href="<?= base_url(); ?>Download/rundown_indoor">Download</a>
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
      Berupa Rundown Kegiatan Indoor dari awal sampai akhir selama dua hari, berikut materi dan tempat pelaksanaan.
     <a href="<?= base_url(); ?>Download/materi_indoor">Download</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header alert-success" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Pembekalan Outdoor
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
      Pembekalan Outdoor berupa segala perbekalan yang dibutuhkan untuk Kegiatan Outdoor. 
     <a href="<?= base_url(); ?>Download/bekal_outdoor">Download</a>
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
      Berupa Rundown Kegiatan Indoor dari awal sampai akhir selama tiga hari, berikut materi, tempat pelaksanaan dan pendamping.
     <a href="<?= base_url(); ?>Download/rundown_outdoor">Download</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header alert-success" id="headingSix">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        Sertifikat PKKMB
        </button>
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
      Sertifikat sebagai bukti telah selesai mengikuti keseluruhan kegiatan PKKMB. 
      <a href="<?= base_url(); ?>Download/sertifikat">Download</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
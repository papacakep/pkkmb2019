<h1 class="text-white">a</h1>
<h4 class="text-white">a</h4>
<div class="container">
<h5><a href="<?= base_url(); ?>maba/Profil/profil_diri">Profil>></a>
<?php echo $title; ?></h5>
<div class="shadow p-3 mb-5 bg-white rounded">
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header alert-success" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          Identitas Sekolah Asal
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
        <form action="<?= base_url(); ?>maba/Profil/profil_diri" method="post">
        <div class="form-group row">
            <label for="colJNS" class="col-sm-2 col-form-label col-form-label-sm">Jenis Sekolah</label>
            <div class="col-sm-2">
            <select class="form-control form-control-sm" id="colJNS">
                <option>SMA</option>
                <option>SMK</option>
                <option>MA</option>
                <option>Paket C</option>
            </select>
            </div>
            <label for="colSTS" class="col-sm-2 col-form-label col-form-label-sm">Status Sekolah</label>
            <div class="col-sm-2">
            <select class="form-control form-control-sm" id="colSTSA">
                <option>Negeri</option>
                <option>Swasta</option>
            </select>
            </div>
            <label for="colTHN" class="col-sm-2 col-form-label col-form-label-sm">Tahun Kelulusan</label>
            <div class="col-sm-2">
            <input type="text"  class="form-control form-control-sm" id="colTHN" value="Tahun Kelulusan">
            </div>
        </div>
        <div class="form-group row">
        <label for="colNM" class="col-sm-2 col-form-label col-form-label-sm">Nama Sekolah</label>
            <div class="col-sm-5">
            <input type="text"  class="form-control form-control-sm" id="colNM" value="Nama Sekolah">
            </div>
            <label for="colJRS" class="col-sm-2 col-form-label col-form-label-sm">Jurusan</label>
            <div class="col-sm-3">
            <select class="form-control form-control-sm" id="colJRS">
                <option>Jurusan 1</option>
                <option selected>Jurusan 2</option>
                <option>Jurusan 3</option>
                <option>Jurusan 4</option>
                <option>Jurusan 5</option>
                <option>Jurusan 6</option>
                <option>Jurusan 7</option>
                <option>Jurusan 8</option>
                <option>Jurusan 9</option>
                <option>Jurusan 10</option>
                <option>Jurusan 11</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="colJUR" class="col-sm-7 col-form-label col-form-label-sm"></label>
            <label for="colJUR" class="col-sm-5 col-form-label col-form-label-sm">*) Jika Jurusan tidak terdaftar pada pilihan, silahkan hubungi Admin Prodi</label>
        </div>
        <div class="form-group row">
            <label for="colALMT" class="col-sm-2 col-form-label col-form-label-sm">Alamat Sekolah</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control form-control-sm" id="colALMT" value="Alamat  Sekolah">
            </div>
        </div>
        <div class="form-group row">
            <label for="colPRES" class="col-sm-4 col-form-label col-form-label-sm">Prestasi yang pernah diraih</label>
        </div>
        <div class="form-group row">
            <label for="colSENI" class="col-sm-2 col-form-label col-form-label-sm">Bidang Seni</label>
            <div class="col-sm-2">
            <select class="form-control form-control-sm" id="colSENI">
                <option>Ada</option>
                <option selected>Tidak Ada</option>
            </select>
            </div>
            <label for="colOR" class="col-sm-2 col-form-label col-form-label-sm">Bidang Olah Raga</label>
            <div class="col-sm-2">
            <select class="form-control form-control-sm" id="colOR">
                <option>Ada</option>
                <option selected>Tidak Ada</option>
            </select>
            </div>
            <label for="colLAIN" class="col-sm-2 col-form-label col-form-label-sm">Lainnya</label>
            <div class="col-sm-2">
            <select class="form-control form-control-sm" id="colLAIN">
                <option>Ada</option>
                <option selected>Tidak Ada</option>
            </select>
            </div>
        </div>
        <button class="btn btn-outline-success rounded-pill" type="button" data-toggle="modal" data-target="#editModal">Edit</button>
        </form>
        </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Identitas Sekolah Asal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Identitas Sekolah Asal berhasil diubah.
      </div>
      <div class="modal-footer">
        <a href="<?= base_url(); ?>maba/Profil/profil_diri" class="btn btn-primary">OK</a>
      </div>
    </div>
  </div>
</div>
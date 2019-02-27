<h1 class="text-white">a</h1>
<h4 class="text-white">a</h4>
<div class="container">
<h5><?php echo $title; ?></h5>
<div class="shadow p-3 mb-5 bg-white rounded">
<div class="accordion" id="accordionExample">
  <div class="card">
  <div class="text-center"><a href="<?= base_url(); ?>admin/Prodi/edit_foto">
      <img src="#" alt="Foto" class="img-thumbnail rounded"></a></div>
    <div class="card-header alert-success" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Identitas Diri
        </button>
      </h2>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
        <form action="<?= base_url(); ?>admin/Prodi/edit_profil" method="post">
        <div class="form-group row">
            <label for="colNIM" class="col-sm-2 col-form-label col-form-label-sm">NIPY</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colNIM" value="NIPY">
            </div>
            <label for="colPRODI" class="col-sm-2 col-form-label col-form-label-sm">NIDN</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colPRODI" value="NIDN">
            </div>
        </div>
        <div class="form-group row">
            <label for="colNMLNGKP" class="col-sm-2 col-form-label col-form-label-sm">Nama Lengkap</label>
            <div class="col-sm-6">
            <input type="text" readonly class="form-control form-control-sm" id="colNMLNGKP" value="Nama Lengkap">
            </div>
            <label for="colPNGL" class="col-sm-2 col-form-label col-form-label-sm">Nama Panggilan</label>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colPNGL" value="Nama Panggilan">
            </div>
        </div>
        <div class="form-group row">
            <label for="colTMPT" class="col-sm-2 col-form-label col-form-label-sm">Tempat Tanggal Lahir</label>
            <div class="col-sm-3">
            <input type="text" readonly class="form-control form-control-sm" id="colTMPT" value="Tempat Lahir">
            </div>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colTGL" value="Tanggal">
            </div>
            <div class="col-sm-3">
            <input type="text" readonly class="form-control form-control-sm" id="colBLN" value="Bulan">
            </div>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colTHN" value="Tahun">
            </div>
        </div>
        <div class="form-group row">
            <label for="colJK" class="col-sm-2 col-form-label col-form-label-sm">Jenis Kelamin</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colJK" value="Jenis Kelamin">
            </div>
            <label for="colAGM" class="col-sm-2 col-form-label col-form-label-sm">Agama</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colAGM" value="Agama">
            </div>
        </div>
        <div class="form-group row">
            <label for="colJBT" class="col-sm-2 col-form-label col-form-label-sm">Jabatan</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="coJBT" value="Jabatan">
            </div>
            <label for="colHP" class="col-sm-2 col-form-label col-form-label-sm">No. HP/WA</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colHP" value="No. HP/WA">
            </div>
        </div>
        <div class="form-group row">
            <label for="colMAIL" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colMAIL" value="Email">
            </div>
            <label for="colFB" class="col-sm-2 col-form-label col-form-label-sm">Facebook</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colFB" value="Facebook">
            </div>
        </div>
        <div class="form-group row">
            <label for="colTW" class="col-sm-2 col-form-label col-form-label-sm">Twitter</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colTW" value="Twitter">
            </div>
            <label for="colIG" class="col-sm-2 col-form-label col-form-label-sm">Instagram</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colIG" value="Instagram">
            </div>
        </div>
        <button class="btn btn-outline-success rounded-pill" type="submit">Edit</button>
        </form>
        </div>
    </div>
  </div>
  </div>
</div>
</div>
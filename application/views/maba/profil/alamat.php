<h1 class="text-white">a</h1>
<h4 class="text-white">a</h4>
<div class="container">
<h5><a href="<?= base_url(); ?>maba/Profil/profil_diri">Profil>></a>
<?php echo $title; ?></h5>
<div class="shadow p-3 mb-5 bg-white rounded">
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header alert-success" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          Alamat
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">        
        <form action="<?= base_url(); ?>maba/Profil/profil_diri" method="post">
        <div class="form-group row">
            <label for="colJL" class="col-sm-2 col-form-label col-form-label-sm">Nama Jalan</label>
            <div class="col-sm-8">
            <input type="text"  class="form-control form-control-sm" id="colJL" value="Nama Jalan">
            </div>
        </div>
        <div class="form-group row">
            <label for="colRT" class="col-sm-1 col-form-label col-form-label-sm">RT</label>
            <div class="col-sm-2">
            <input type="text"  class="form-control form-control-sm" id="colRT" value="RT">
            </div>
            <label for="colRW" class="col-sm-1 col-form-label col-form-label-sm">RW</label>
            <div class="col-sm-2">
            <input type="text"  class="form-control form-control-sm" id="colRW" value="RW">
            </div>
            <label for="colGG" class="col-sm-2 col-form-label col-form-label-sm">Nama Gang</label>
            <div class="col-sm-4">
            <input type="text"  class="form-control form-control-sm" id="colGG" value="Nama Gang">
            </div>
        </div>
        <div class="form-group row">
            <label for="colDSN" class="col-sm-2 col-form-label col-form-label-sm">Dusun</label>
            <div class="col-sm-4">
            <input type="text"  class="form-control form-control-sm" id="colDSN" value="Dusun">
            </div>
            <label for="colPROP" class="col-sm-2 col-form-label col-form-label-sm">Propinsi</label>
            <div class="col-sm-4">
            <select class="form-control form-control-sm" id="colPROP">
              <option>Propinsi1</option>
              <option selected>Jawa Tengah</option>
              <option>Propinsi2</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
        <label for="colKOT" class="col-sm-2 col-form-label col-form-label-sm">Kabupaten/Kota</label>
            <div class="col-sm-4">
            <select class="form-control form-control-sm" id="colKOT">
              <option>Kabupaten Tegal</option>
              <option selected>Kota Tegal</option>
              <option>Kabupaten Brebes</option>
              <option>Kabupaten Pemalang</option>
            </select>
            </div>
            <label for="colCMT" class="col-sm-2 col-form-label col-form-label-sm">Kecamatan</label>
            <div class="col-sm-4">
            <select class="form-control form-control-sm" id="colCMT">
              <option>Tegal Barat</option>
              <option selected>Margadana</option>
              <option>Tegal Timur</option>
              <option>Tegal Selatan</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
        <label for="colDESA" class="col-sm-2 col-form-label col-form-label-sm">Desa/Kelurahan</label>
            <div class="col-sm-4">
            <select class="form-control form-control-sm" id="colDESA">
              <option>Kaligangsa</option>
              <option>Krandon</option>
              <option>Cabawan</option>
              <option>Margadana</option>
              <option selected>Pesurungan Lor</option>
              <option>Sumurpanggang</option>
              <option>Kalinyamat Kulon</option>
            </select>
            </div>
            <label for="colPOS" class="col-sm-2 col-form-label col-form-label-sm">Kode Pos</label>
            <div class="col-sm-2">
            <input type="text"  class="form-control form-control-sm" id="colPOS" value="Kode Pos">
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
        <h5 class="modal-title" id="editModalLabel">Alamat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Alamat diri berhasil diubah.
      </div>
      <div class="modal-footer">
        <a href="<?= base_url(); ?>maba/Profil/profil_diri" class="btn btn-primary">OK</a>
      </div>
    </div>
  </div>
</div>
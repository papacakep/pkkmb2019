<h1 class="text-white">a</h1>
<h4 class="text-white">a</h4>
<div class="container">
<h5><a href="<?= base_url(); ?>maba/Profil/profil_diri">Profil>></a>
<?php echo $title; ?></h5>
<div class="shadow p-3 mb-5 bg-white rounded">
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header alert-success" id="headingFive">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
          Identitas Orang Tua
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample">
        <div class="card-body">        
        <form action="<?= base_url(); ?>maba/Profil/profil_diri" method="post">
        <div class="form-group row">
            <label for="colAYAH" class="col-sm-2 col-form-label col-form-label-sm">Nama Ayah</label>
            <div class="col-sm-6">
            <input type="text"  class="form-control form-control-sm" id="colAYAH" value="Nama Ayah">
            </div>
            <label for="colSTSA" class="col-sm-2 col-form-label col-form-label-sm">Status Ayah</label>
            <div class="col-sm-2">
            <select class="form-control form-control-sm" id="colSTSA">
                <option>Masih Hidup</option>
                <option>Sudah Meninggal</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="colKRJA" class="col-sm-2 col-form-label col-form-label-sm">Pekerjaan Ayah</label>
            <div class="col-sm-4">
            <select class="form-control form-control-sm" id="colKRJA">
                <option>PNS</option>
                <option>TNI/POLRI</option>
                <option>Wiraswasta</option>
                <option>Pegawai Swasta</option>
                <option>Petani</option>
                <option>Peternak</option>
                <option>Pedagang</option>
                <option>Sopir</option>
                <option>Nelayan</option>
                <option>Pelaut</option>
                <option>Pensiunan PNS</option>
                <option selected>-</option>
            </select>
            </div>
            <label for="colAYAHGJ" class="col-sm-2 col-form-label col-form-label-sm">Penghasilan Ayah</label>
            <div class="col-sm-4">
            <select class="form-control form-control-sm" id="colAYAHGJ">
                <option>Kurang dari Rp. 1.000.000,-</option>
                <option>Antara Rp. 1.000.000,- s/d Rp. 2.500.000,-</option>
                <option selected>Antara Rp. 2.500.000,- s/d Rp. 5.000.000,-</option>
                <option>Lebih dari Rp. 5.000.000,-</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="colIBU" class="col-sm-2 col-form-label col-form-label-sm">Nama Ibu</label>
            <div class="col-sm-6">
            <input type="text"  class="form-control form-control-sm" id="colIBU" value="Nama Ibu">
            </div>
            <label for="colSTSI" class="col-sm-2 col-form-label col-form-label-sm">Status Ibu</label>
            <div class="col-sm-2">
            <select class="form-control form-control-sm" id="colSTSI">
                <option>Masih Hidup</option>
                <option>Sudah Meninggal</option>
            </select>            
            </div>
        </div>
        <div class="form-group row">
            <label for="colKRJI" class="col-sm-2 col-form-label col-form-label-sm">Pekerjaan Ibu</label>
            <div class="col-sm-4">
            <select class="form-control form-control-sm" id="colKRJI">
                <option>PNS</option>
                <option>TNI/POLRI</option>
                <option>Wiraswasta</option>
                <option>Pegawai Swasta</option>
                <option>Petani</option>
                <option>Peternak</option>
                <option>Pedagang</option>
                <option>Sopir</option>
                <option>Nelayan</option>
                <option>Pelaut</option>
                <option>Pensiunan PNS</option>
                <option>Ibu Rumah Tangga</option>
                <option selected>-</option>
            </select>
            </div>
            <label for="colIBUGJ" class="col-sm-2 col-form-label col-form-label-sm">Penghasilan Ibu</label>
            <div class="col-sm-4">
            <select class="form-control form-control-sm" id="colIBUGJ">
                <option>Kurang dari Rp. 1.000.000,-</option>
                <option>Antara Rp. 1.000.000,- s/d Rp. 2.500.000,-</option>
                <option selected>Antara Rp. 2.500.000,- s/d Rp. 5.000.000,-</option>
                <option>Lebih dari Rp. 5.000.000,-</option>
            </select>            
            </div>
        </div>
        <div class="form-group row">
            <label for="colAYAHHP" class="col-sm-2 col-form-label col-form-label-sm">No. HP Ayah</label>
            <div class="col-sm-4">
            <input type="text"  class="form-control form-control-sm" id="colAYAHHP" value="No. HP Ayah">
            </div>
            <label for="colIBUHP" class="col-sm-2 col-form-label col-form-label-sm">No. HP Ibu</label>
            <div class="col-sm-4">
            <input type="text"  class="form-control form-control-sm" id="colIBUHP" value="No. HP Ibu">
            </div>
        </div>
        <div class="form-group row">
            <label for="colWALI" class="col-sm-2 col-form-label col-form-label-sm">Nama Wali</label>
            <div class="col-sm-6">
            <input type="text"  class="form-control form-control-sm" id="colWALI" value="Nama Wali">
            </div>
            <label for="colWALISTS" class="col-sm-2 col-form-label col-form-label-sm">Kedudukan Wali</label>
            <div class="col-sm-2">
            <select class="form-control form-control-sm" id="colWALISTS">
                <option>Kakak Kandung</option>
                <option>Saudara Orang Tua</option>
                <option>Orang Tua Angkat</option>
                <option>Orang Tua Tiri</option>
            </select>            
            </div>
        </div>
        <div class="form-group row">
            <label for="colKRJW" class="col-sm-2 col-form-label col-form-label-sm">Pekerjaan Wali</label>
            <div class="col-sm-4">
            <select class="form-control form-control-sm" id="colKRJW">
                <option>PNS</option>
                <option>TNI/POLRI</option>
                <option>Wiraswasta</option>
                <option>Pegawai Swasta</option>
                <option>Petani</option>
                <option>Peternak</option>
                <option>Pedagang</option>
                <option>Sopir</option>
                <option>Nelayan</option>
                <option>Pelaut</option>
                <option>Pensiunan PNS</option>
                <option selected>-</option>
            </select>
            </div>
            <label for="colWALIGJ" class="col-sm-2 col-form-label col-form-label-sm">Penghasilan Wali</label>
            <div class="col-sm-4">
            <select class="form-control form-control-sm" id="colWALIGJ">
                <option>Kurang dari Rp. 1.000.000,-</option>
                <option>Antara Rp. 1.000.000,- s/d Rp. 2.500.000,-</option>
                <option selected>Antara Rp. 2.500.000,- s/d Rp. 5.000.000,-</option>
                <option>Lebih dari Rp. 5.000.000,-</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="colWALIHP" class="col-sm-2 col-form-label col-form-label-sm">No. HP Wali</label>
            <div class="col-sm-4">
            <input type="text"  class="form-control form-control-sm" id="colWALIHP" value="No. HP Wali">
            </div>
            <label for="colWALIALM" class="col-sm-2 col-form-label col-form-label-sm">Alamat Wali</label>
            <div class="col-sm-4">
            <input type="text"  class="form-control form-control-sm" id="colWALIALM" value="Alamat Wali">
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
        <h5 class="modal-title" id="editModalLabel">Identitas Orang Tua/Wali</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Identitas Orang Tua/Wali berhasil diubah.
      </div>
      <div class="modal-footer">
        <a href="<?= base_url(); ?>maba/Profil/profil_diri" class="btn btn-primary">OK</a>
      </div>
    </div>
  </div>
</div>


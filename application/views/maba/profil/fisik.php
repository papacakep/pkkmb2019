<h1 class="text-white">a</h1>
<h4 class="text-white">a</h4>
<div class="container">
<h5><a href="<?= base_url(); ?>maba/Profil/profil_diri">Profil>></a>
<?php echo $title; ?></h5>
<div class="shadow p-3 mb-5 bg-white rounded">
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header alert-success" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
          Kondisi Kesehatan
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
        <div class="card-body">
        <form action="<?= base_url(); ?>maba/Profil/profil_diri" method="post">
        <div class="form-group row">
            <label for="colTNG" class="col-sm-2 col-form-label col-form-label-sm">Tinggi Badan</label>
            <div class="col-sm-2">
            <input type="text"  class="form-control form-control-sm" id="colTNG" value="Tinggi Badan">
            </div>
            <label for="colBRT" class="col-sm-2 col-form-label col-form-label-sm">Berat Badan</label>
            <div class="col-sm-2">
            <input type="text"  class="form-control form-control-sm" id="colBRT" value="Berat Badan">
            </div>
            <label for="colGD" class="col-sm-2 col-form-label col-form-label-sm">Golongan Darah</label>
            <div class="col-sm-2">
            <select class="form-control form-control-sm" id="colGD">
                <option>A</option>
                <option>B</option>
                <option>AB</option>
                <option>O</option>
                <option selected>-</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="colKCMT" class="col-sm-2 col-form-label col-form-label-sm">Berkacamata</label>
            <div class="col-sm-2">
            <select class="form-control form-control-sm" id="colKCMT">
                <option>Ya</option>
                <option selected>Tidak</option>
            </select>
            </div>
            <label for="colKCMTKN" class="col-sm-2 col-form-label col-form-label-sm">Ukuran Lensa Kanan</label>
            <div class="col-sm-2">
            <input type="text"  class="form-control form-control-sm" id="colKCMTKN" value="-">
            </div>
            <label for="colKCMTKR" class="col-sm-2 col-form-label col-form-label-sm">Ukuran Lensa Kiri</label>
            <div class="col-sm-2">
            <input type="text"  class="form-control form-control-sm" id="colKCMTKR" value="-">
            </div>
        </div>
        <div class="form-group row">
            <label for="colSKT" class="col-sm-2 col-form-label col-form-label-sm">Riwayat Penyakit</label>
            <div class="col-sm-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Jantung
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                    Asma
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck12">
                <label class="form-check-label" for="defaultCheck12">
                    Vertigo
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck22">
                <label class="form-check-label" for="defaultCheck22">
                    Anemia
                </label>
                </div>
            </div>
            <div class="col-sm-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                <label class="form-check-label" for="defaultCheck3">
                    Typus
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                <label class="form-check-label" for="defaultCheck4">
                    Maagh
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck13">
                <label class="form-check-label" for="defaultCheck13">
                    Tekanan Darah Tinggi
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck23">
                <label class="form-check-label" for="defaultCheck23">
                    Alergi
                </label>
                </div>
            </div>
            <div class="col-sm-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                <label class="form-check-label" for="defaultCheck5">
                    Patah Tulang
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
                <label class="form-check-label" for="defaultCheck6">
                    Pasca Operasi
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck14">
                <label class="form-check-label" for="defaultCheck14">
                    Sering Pinsan
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck24">
                <label class="form-check-label" for="defaultCheck24">
                    Kesurupan
                </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="colPKN" class="col-sm-2 col-form-label col-form-label-sm">Ukuran Pakaian</label>
            <div class="col-sm-2">
            <select class="form-control form-control-sm" id="colPKN">
                <option>S</option>
                <option>M</option>
                <option selected>L</option>
                <option>XL</option>
                <option>XXL</option>
                <option>XXXL</option>
                <option>XXXXL</option>
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
        <h5 class="modal-title" id="editModalLabel">Kondisi Fisik</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Data Kondisi Fisik berhasil diubah.
      </div>
      <div class="modal-footer">
        <a href="<?= base_url(); ?>maba/Profil/profil_diri" class="btn btn-primary">OK</a>
      </div>
    </div>
  </div>
</div>
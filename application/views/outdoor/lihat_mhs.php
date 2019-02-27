<h1 class="text-white">a</h1>
<h4 class="text-white">a</h4>
<div class="container">
<h5> <a href="<?= base_url(); ?>admin/Outdoor/download">Download>></a><?php echo $title; ?></h5>
<div class="shadow p-3 mb-5 bg-white rounded">
<div class="accordion" id="accordionExample">
  <div class="card">
  <div class="text-center"><a href="<?= base_url(); ?>Download/detil_data">
      <img src="#" alt="Foto" class="img-thumbnail rounded"></a></div>
    <div class="card-header alert-success" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Identitas Diri
        </button>
      </h2>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
        <div class="form-group row">
            <label for="colNIM" class="col-sm-2 col-form-label col-form-label-sm">NIM</label>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colNIM" value="NIM">
            </div>
            <label for="colPRODI" class="col-sm-2 col-form-label col-form-label-sm">Program Studi</label>
            <div class="col-sm-5">
            <input type="text" readonly class="form-control form-control-sm" id="colPRODI" value="Program Studi">
            </div>
        </div>
        <div class="form-group row">
            <label for="colNMLNGKP" class="col-sm-2 col-form-label col-form-label-sm">Nama Lengkap</label>
            <div class="col-sm-8">
            <input type="text" readonly class="form-control form-control-sm" id="colNMLNGKP" value="Nama Lengkap">
            </div>
        </div>
        <div class="form-group row">
            <label for="colPNGL" class="col-sm-2 col-form-label col-form-label-sm">Nama Panggilan</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colPNGL" value="Nama Panggilan">
            </div>
            <label for="colJK" class="col-sm-2 col-form-label col-form-label-sm">Jenis Kelamin</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colJK" value="Jenis Kelamin">
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
            <label for="colAGM" class="col-sm-2 col-form-label col-form-label-sm">Agama</label>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colAGM" value="Agama">
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
        </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header alert-success" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Alamat
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
        <div class="form-group row">
            <label for="colJL" class="col-sm-2 col-form-label col-form-label-sm">Nama Jalan</label>
            <div class="col-sm-8">
            <input type="text" readonly class="form-control form-control-sm" id="colJL" value="Nama Jalan">
            </div>
        </div>
        <div class="form-group row">
            <label for="colRT" class="col-sm-1 col-form-label col-form-label-sm">RT</label>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colRT" value="RT">
            </div>
            <label for="colRW" class="col-sm-1 col-form-label col-form-label-sm">RW</label>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colRW" value="RW">
            </div>
            <label for="colGG" class="col-sm-2 col-form-label col-form-label-sm">Nama Gang</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colGG" value="Nama Gang">
            </div>
        </div>
        <div class="form-group row">
            <label for="colDSN" class="col-sm-2 col-form-label col-form-label-sm">Dusun</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colDSN" value="Dusun">
            </div>
            <label for="colDESA" class="col-sm-2 col-form-label col-form-label-sm">Desa/Kelurahan</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colDESA" value="Desa/Kelurahan">
            </div>
        </div>
        <div class="form-group row">
            <label for="colCMT" class="col-sm-2 col-form-label col-form-label-sm">Kecamatan</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colCMT" value="Kecamatan">
            </div>
            <label for="colKOT" class="col-sm-2 col-form-label col-form-label-sm">Kabupaten/Kota</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colKOT" value="Kabupaten/Kota">
            </div>
        </div>
        <div class="form-group row">
            <label for="colPROP" class="col-sm-2 col-form-label col-form-label-sm">Propinsi</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colPROP" value="Propinsi">
            </div>
            <label for="colPOS" class="col-sm-2 col-form-label col-form-label-sm">Kode Pos</label>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colPOS" value="Kode Pos">
            </div>
        </div>
        </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header alert-success" id="headingFive">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Identitas Orang Tua
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
        <div class="card-body">
        <div class="form-group row">
            <label for="colAYAH" class="col-sm-2 col-form-label col-form-label-sm">Nama Ayah</label>
            <div class="col-sm-6">
            <input type="text" readonly class="form-control form-control-sm" id="colAYAH" value="Nama Ayah">
            </div>
            <label for="colSTSA" class="col-sm-2 col-form-label col-form-label-sm">Status Ayah</label>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colSTSA" value="Status Ayah">
            </div>
        </div>
        <div class="form-group row">
            <label for="colKRJA" class="col-sm-2 col-form-label col-form-label-sm">Pekerjaan Ayah</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colKRJA" value="Pekerjaan Ayah">
            </div>
            <label for="colAYAHGJ" class="col-sm-2 col-form-label col-form-label-sm">Penghasilan Ayah</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colAYAHGJ" value="Penghasilan Ayah">
            </div>
        </div>
        <div class="form-group row">
            <label for="colIBU" class="col-sm-2 col-form-label col-form-label-sm">Nama Ibu</label>
            <div class="col-sm-6">
            <input type="text" readonly class="form-control form-control-sm" id="colIBU" value="Nama Ibu">
            </div>
            <label for="colSTSI" class="col-sm-2 col-form-label col-form-label-sm">Status Ibu</label>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colSTSI" value="Status Ibu">
            </div>
        </div>
        <div class="form-group row">
            <label for="colKRJI" class="col-sm-2 col-form-label col-form-label-sm">Pekerjaan Ibu</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colKRJI" value="Pekerjaan Ibu">
            </div>
            <label for="colIBUGJ" class="col-sm-2 col-form-label col-form-label-sm">Penghasilan Ibu</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colIBUGJ" value="Penghasilan Ibu">
            </div>
        </div>
        <div class="form-group row">
            <label for="colAYAHHP" class="col-sm-2 col-form-label col-form-label-sm">No. HP Ayah</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colAYAHHP" value="No. HP Ayah">
            </div>
            <label for="colIBUHP" class="col-sm-2 col-form-label col-form-label-sm">No. HP Ibu</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colIBUHP" value="No. HP Ibu">
            </div>
        </div>
        <div class="form-group row">
            <label for="colWALI" class="col-sm-2 col-form-label col-form-label-sm">Nama Wali</label>
            <div class="col-sm-6">
            <input type="text" readonly class="form-control form-control-sm" id="colWALI" value="Nama Wali">
            </div>
            <label for="colWALISTS" class="col-sm-2 col-form-label col-form-label-sm">Kedudukan Wali</label>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colWALISTS" value="Status Wali">
            </div>
        </div>
        <div class="form-group row">
            <label for="colKRJW" class="col-sm-2 col-form-label col-form-label-sm">Pekerjaan Wali</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colKRJW" value="Pekerjaan Wali">
            </div>
            <label for="colWALIGJ" class="col-sm-2 col-form-label col-form-label-sm">Penghasilan Wali</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colWALIGJ" value="Penghasilan Wali">
            </div>
        </div>
        <div class="form-group row">
            <label for="colWALIHP" class="col-sm-2 col-form-label col-form-label-sm">No. HP Wali</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colWALIHP" value="No. HP Wali">
            </div>
            <label for="colWALIALMT" class="col-sm-2 col-form-label col-form-label-sm">Alamat Wali</label>
            <div class="col-sm-4">
            <input type="text" readonly class="form-control form-control-sm" id="colWALIALMT" value="Alamat Wali">
            </div>
        </div>
        </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header alert-success" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Identitas Sekolah Asal
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
        <div class="form-group row">
            <label for="colJNS" class="col-sm-2 col-form-label col-form-label-sm">Jenis Sekolah</label>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colJNS" value="Jenis Sekolah">
            </div>
            <label for="colSTS" class="col-sm-2 col-form-label col-form-label-sm">Status Sekolah</label>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colSTS" value="Status Sekolah">
            </div>
            <label for="colTHN" class="col-sm-2 col-form-label col-form-label-sm">Tahun Kelulusan</label>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colTHN" value="Tahun Kelulusan">
            </div>
        </div>
        <div class="form-group row">
            <label for="colNM" class="col-sm-2 col-form-label col-form-label-sm">Nama Sekolah</label>
            <div class="col-sm-5">
            <input type="text" readonly class="form-control form-control-sm" id="colNM" value="Nama Sekolah">
            </div>
            <label for="colJRS" class="col-sm-2 col-form-label col-form-label-sm">Jurusan</label>
            <div class="col-sm-3">
            <input type="text" readonly class="form-control form-control-sm" id="colJRS" value="Jurusan">
            </div>
        </div>
        <div class="form-group row">
            <label for="colALMT" class="col-sm-2 col-form-label col-form-label-sm">Alamat Sekolah</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control form-control-sm" id="colALMT" value="Alamat  Sekolah">
            </div>
        </div>
        <div class="form-group row">
            <label for="colPRES" class="col-sm-4 col-form-label col-form-label-sm">Prestasi yang pernah diraih</label>
        </div>
        <div class="form-group row">
            <label for="colSENI" class="col-sm-2 col-form-label col-form-label-sm">Bidang Seni</label>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colSENI" value="Tidak Ada">
            </div>
            <label for="colOR" class="col-sm-2 col-form-label col-form-label-sm">Bidang Olah Raga</label>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colOR" value="Tidak Ada">
            </div>
            <label for="colLAIN" class="col-sm-2 col-form-label col-form-label-sm">Lainnya</label>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colLAIN" value="Tidak Ada">
            </div>
        </div>
        </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header alert-success" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Kondisi Fisik
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
        <div class="card-body">
        <div class="form-group row">
            <label for="colTNG" class="col-sm-2 col-form-label col-form-label-sm">Tinggi Badan</label>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colTNG" value="Tinggi Badan">
            </div>
            <label for="colBRT" class="col-sm-2 col-form-label col-form-label-sm">Berat Badan</label>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colBRT" value="Berat Badan">
            </div>
            <label for="colGD" class="col-sm-2 col-form-label col-form-label-sm">Golongan Darah</label>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colGD" value="Golongan Darah">
            </div>
        </div>
        <div class="form-group row">
            <label for="colKCMT" class="col-sm-2 col-form-label col-form-label-sm">Berkacamata</label>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colKCMT" value="Tidak">
            </div>
            <label for="colKCMTKN" class="col-sm-2 col-form-label col-form-label-sm">Ukuran Lensa Kanan</label>
            <div class="col-sm-2">
            <input type="text"  readonly class="form-control form-control-sm" id="colKCMTKN" value="-">
            </div>
            <label for="colKCMTKR" class="col-sm-2 col-form-label col-form-label-sm">Ukuran Lensa Kiri</label>
            <div class="col-sm-2">
            <input type="text"  readonly class="form-control form-control-sm" id="colKCMTKR" value="-">
            </div>
        </div>
        <div class="form-group row">
            <label for="colSKT" class="col-sm-2 col-form-label col-form-label-sm">Riwayat Penyakit</label>
            <div class="col-sm-6">
            <input type="text" readonly class="form-control form-control-sm" id="colSKT" value="Riwayat Penyakit">
            </div>
            <label for="colPKN" class="col-sm-2 col-form-label col-form-label-sm">Ukuran Pakaian</label>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control form-control-sm" id="colPKN" value="Ukuran Pakaian">
            </div>
        </div>
        </div>
    </div>
  </div>
</div>
</div>
</div>
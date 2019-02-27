<h1 class="text-white">a</h1>
<h4 class="text-white">a</h4>
<div class="container">
<h5><?php echo $title; ?></h5>
<div class="shadow p-3 mb-5 bg-white rounded">
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header alert-success" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Identitas Diri
        </button>
      </h2>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
        <form action="" method="post">
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
            <input type="text"  class="form-control form-control-sm" id="colNMLNGKP" value="Nama Lengkap">
            </div>
        </div>
        <div class="form-group row">
            <label for="colPNGL" class="col-sm-2 col-form-label col-form-label-sm">Nama Panggilan</label>
            <div class="col-sm-4">
            <input type="text"  class="form-control form-control-sm" id="colPNGL" value="Nama Panggilan">
            </div>
            <label for="colJK" class="col-sm-2 col-form-label col-form-label-sm">Jenis Kelamin</label>
            <div class="col-sm-4">
            <select class="form-control form-control-sm" id="colJK">
                <option>Laki-laki</option>
                <option>Perempuan</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="colTMPT" class="col-sm-2 col-form-label col-form-label-sm">Tempat Tanggal Lahir</label>
            <div class="col-sm-3">
            <input type="text"  class="form-control form-control-sm" id="colTMPT" value="Tempat Lahir">
            </div>
            <div class="col-sm-2">
            <select class="form-control form-control-sm" id="colTGL">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
                <option>31</option>
            </select>
            </div>
            <div class="col-sm-3">
            <select class="form-control form-control-sm" id="colBLN">
                <option>Januari</option>
                <option>Februari</option>
                <option>Maret</option>
                <option>April</option>
                <option>Mei</option>
                <option>Juni</option>
                <option>Juli</option>
                <option>Agustus</option>
                <option>September</option>
                <option>Oktober</option>
                <option>Nopember</option>
                <option>Desember</option>
            </select>
            </div>
            <div class="col-sm-2">
            <select class="form-control form-control-sm" id="colTHN">
                <option>1991</option>
                <option>1992</option>
                <option>1993</option>
                <option>1994</option>
                <option>1995</option>
                <option>1996</option>
                <option>1997</option>
                <option>1998</option>
                <option>1999</option>
                <option>2000</option>
                <option selected>2001</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="colAGM" class="col-sm-2 col-form-label col-form-label-sm">Agama</label>
            <div class="col-sm-2">
            <select class="form-control form-control-sm" id="colAGM">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Katholik</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Konghuchu</option>
            </select>
            </div>
            <label for="colHP" class="col-sm-2 col-form-label col-form-label-sm">No. HP/WA</label>
            <div class="col-sm-4">
            <input type="text"  class="form-control form-control-sm" id="colHP" value="No. HP/WA">
            </div>
        </div>
        <div class="form-group row">
            <label for="colMAIL" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
            <div class="col-sm-4">
            <input type="text"  class="form-control form-control-sm" id="colMAIL" value="Email">
            </div>
            <label for="colFB" class="col-sm-2 col-form-label col-form-label-sm">Facebook</label>
            <div class="col-sm-4">
            <input type="text"  class="form-control form-control-sm" id="colFB" value="Facebook">
            </div>
        </div>
        <div class="form-group row">
            <label for="colTW" class="col-sm-2 col-form-label col-form-label-sm">Twitter</label>
            <div class="col-sm-4">
            <input type="text"  class="form-control form-control-sm" id="colTW" value="Twitter">
            </div>
            <label for="colIG" class="col-sm-2 col-form-label col-form-label-sm">Instagram</label>
            <div class="col-sm-4">
            <input type="text"  class="form-control form-control-sm" id="colIG" value="Instagram">
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
        <h5 class="modal-title" id="editModalLabel">Edit Profil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Profil diri berhasil diubah.
      </div>
      <div class="modal-footer">
        <a href="<?= base_url(); ?>admin/Indoor/profil" class="btn btn-primary">OK</a>
      </div>
    </div>
  </div>
</div>
<h1 class="text-white">a</h1>
<h4 class="text-white">a</h4>
<div class="container">
<h5><?php echo $title; ?></h5>
<div class="shadow p-3 mb-5 bg-white rounded">
<div class="accordion" id="accordionExample">
  <div class="card">
  <form action="" method="post">
    <div class="card-header alert-success" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Hari Pertama
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">NIM</th>
      <th scope="col">NAMA</th>
      <th scope="col">KETERANGAN</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  for ($x = 1; $x <= 30; $x++) {?>
    <tr>
      <td><a href="<?= base_url(); ?>admin/Outdoor/lihat_mhs">NIM</a></td>
      <td><a href="<?= base_url(); ?>admin/Outdoor/lihat_mhs">NAMA</a></td>
      <td>            <select>
                <option>HADIR</option>
                <option>TIDAK HADIR</option>
            </select>
      </td>
    </tr>
  <?php }?>
  </tbody>
</table>
</div>
<div class="text-center">
<button type="button" class="btn alert-success" data-toggle="modal" data-target="#editModal1">Kirim</button>
</div>
      </div>
      </form>
    </div>
    <div class="card">
    <form action="" method="post">
    <div class="card-header alert-success" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Hari Kedua
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">NIM</th>
      <th scope="col">NAMA</th>
      <th scope="col">KETERANGAN</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  for ($x = 1; $x <= 30; $x++) {?>
    <tr>
      <td><a href="<?= base_url(); ?>admin/Outdoor/lihat_mhs">NIM</a></td>
      <td><a href="<?= base_url(); ?>admin/Outdoor/lihat_mhs">NAMA</a></td>
      <td>            <select>
                <option>HADIR</option>
                <option>TIDAK HADIR</option>
            </select>
      </td>
    </tr>
  <?php }?>
  </tbody>
</table>
</div>
<div class="text-center">
      <button type="button" class="btn alert-success" data-toggle="modal" data-target="#editModal2">Kirim</button>
</div>
      </div>
      </form>
    </div>
    <div class="card">
  <form action="" method="post">
    <div class="card-header alert-success" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Hari Ketiga
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">NIM</th>
      <th scope="col">NAMA</th>
      <th scope="col">KETERANGAN</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  for ($x = 1; $x <= 30; $x++) {?>
    <tr>
      <td><a href="<?= base_url(); ?>admin/Outdoor/lihat_mhs">NIM</a></td>
      <td><a href="<?= base_url(); ?>admin/Outdoor/lihat_mhs">NAMA</a></td>
      <td>            <select>
                <option>HADIR</option>
                <option>TIDAK HADIR</option>
            </select>
      </td>
    </tr>
  <?php }?>
  </tbody>
</table>
</div>
<div class="text-center">
<button type="button" class="btn alert-success" data-toggle="modal" data-target="#editModal3">Kirim</button></div>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="editModal1" tabindex="-1" role="dialog" aria-labelledby="editModalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalTitle">Memasukkan Presensi Hari Pertama</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Berhasil Memasukkan Presensi Hari Pertama.
      </div>
      <div class="modal-footer">
        <a href="" class="btn btn-primary">OK</a>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="editModal2" tabindex="-1" role="dialog" aria-labelledby="editModalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalTitle">Memasukkan Presensi Hari Kedua</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Berhasil Memasukkan Presensi Hari Kedua.
      </div>
      <div class="modal-footer">
        <a href="" class="btn btn-primary">OK</a>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="editModal3" tabindex="-1" role="dialog" aria-labelledby="editModalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalTitle">Memasukkan Presensi Hari Ketiga</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Berhasil Memasukkan Presensi Hari Ketiga.
      </div>
      <div class="modal-footer">
        <a href="" class="btn btn-primary">OK</a>
      </div>
    </div>
  </div>
</div>
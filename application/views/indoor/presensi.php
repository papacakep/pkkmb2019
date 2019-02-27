<h1 class="text-white">a</h1>
<h4 class="text-white">a</h4>
<div class="container">
<h5><?php echo $title; ?></h5>
<div class="shadow p-3 mb-5 bg-white rounded">
<div class="accordion" id="accordionExample">
  <div class="card">
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
      <td><a href="<?= base_url(); ?>admin/Indoor/lihat_mhs">NIM</a></td>
      <td><a href="<?= base_url(); ?>admin/Indoor/lihat_mhs">NAMA</a></td>
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
      </div>
    </div>
    <div class="card">
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
      <td><a href="<?= base_url(); ?>admin/Indoor/lihat_mhs">NIM</a></td>
      <td><a href="<?= base_url(); ?>admin/Indoor/lihat_mhs">NAMA</a></td>
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
      </div>
    </div>
  </div>
</div>
</div>


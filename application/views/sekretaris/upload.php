<h1 class="text-white">a</h1>
<h4 class="text-white">a</h4>
<div class="container">
<h5><?php echo $title; ?></h5>
<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-2 mb-3">
      <label for="validationCustom04">NIM</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="NIM" required>
      <div class="invalid-feedback">
        Mohon Masukkan NIM dengan Benar.
      </div>
      <div class="valid-feedback">
        NIM yang dimasukkan valid.
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Nama</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Nama" required>
      <div class="invalid-feedback">
        Mohon Masukkan Nama dengan Benar.
      </div>
      <div class="valid-feedback">
        Nama yang dimasukkan valid.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom05">Email</label>
      <input type="email" class="form-control" id="validationCustom05" placeholder="Email" required>
      <div class="invalid-feedback">
        Mohon Masukkan Email dengan Benar.
      </div>
      <div class="valid-feedback">
        Email yang dimasukkan valid.
      </div>
    </div>
  </div>
<!-- Button trigger modal -->
  <button type="button" class="btn alert-success" data-toggle="modal" data-target="#exampleModalCenter">Submit</button>
</form>
<br>
<form action="" method="post">
  <div class="form-group">
    <label for="exampleFormControlFile1">Atau Import Data Mahasiswa</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <button type="button" class="btn alert-success" data-toggle="modal" data-target="#importModalCenter">Import</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<br>
<h5>DATA MAHASISWA</h5>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li>
      <form action="<?= base_url(); ?>Download/data" method="post">
        <button type="submit" class="btn alert-success">Download</button>
      </form> 
    </li>
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">1<span class="sr-only">(current)</span></a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
    <li>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn alert-success my-2 my-sm-0" type="submit">Cari</button>
      </form>
    </li>
  </ul>
</nav>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">NIM</th>
      <th scope="col">NAMA</th>
      <th scope="col">NO. HP/WA</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  for ($x = 1; $x <= 30; $x++) {?>
    <tr>
      <td><a href="<?= base_url(); ?>admin/Sekretaris/lihat_mhs">NIM</a></td>
      <td><a href="<?= base_url(); ?>admin/Sekretaris/lihat_mhs">NAMA</a></td>
      <td><a href="<?= base_url(); ?>admin/Sekretaris/lihat_mhs">NO. HP/WA</a></td>
    </tr>
  <?php }?>
  </tbody>
</table>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Memasukkan Data Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Data berhasil dimasukkan
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="importModalCenter" tabindex="-1" role="dialog" aria-labelledby="importModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="importModalCenterTitle">Mengimport Data Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Data berhasil diimport
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
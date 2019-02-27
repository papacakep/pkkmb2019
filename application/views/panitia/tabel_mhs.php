<h1 class="text-white">a</h1>
<h4 class="text-white">a</h4>
<div class="container">
<h5><?php echo $title; ?></h5>
<div class="card shadow">
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
      <th scope="col">PRODI</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  for ($x = 1; $x <= 30; $x++) {?>
    <tr>
      <td><a href="<?= base_url(); ?>admin/Panitia/lihat_mhs">NIM</a></td>
      <td><a href="<?= base_url(); ?>admin/Panitia/lihat_mhs">NAMA</a></td>
      <td><a href="<?= base_url(); ?>admin/Panitia/lihat_mhs">PRODI</a></td>
    </tr>
  <?php }?>
  </tbody>
</table>
</div>
</div>
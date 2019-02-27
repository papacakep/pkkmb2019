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
      <td><a href="<?= base_url(); ?>admin/Indoor/lihat_mhs">NIM</a></td>
      <td><a href="<?= base_url(); ?>admin/Indoor/lihat_mhs">NAMA</a></td>
      <td><a href="<?= base_url(); ?>admin/Indoor/lihat_mhs">NO. HP/WA</a></td>
    </tr>
  <?php }?>
  </tbody>
</table>
</div>
</div>
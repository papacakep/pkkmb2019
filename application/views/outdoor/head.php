<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>
<body>
<!-- navbar -->
<header>
<nav class="navbar navbar-expand-lg navbar-light fixed-top alert-success">
  <a class="navbar-brand" href="<?= base_url(); ?>admin/Outdoor/home">PKKMB</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo $home;?>">
        <a class="nav-link" href="<?= base_url(); ?>admin/Outdoor/home">Home<?php echo $homesp;?></a>
      </li>
      <li class="nav-item <?php echo $news;?>">
        <a class="nav-link" href="<?= base_url(); ?>admin/Panitia/news">News<?php echo $newssp;?></a>
      </li>
      <li class="nav-item <?php echo $download;?>">
        <a class="nav-link" href="<?= base_url(); ?>admin/Outdoor/download">Download<?php echo $downloadsp;?></a>
      </li>
      <li class="nav-item <?php echo $presensi;?>">
        <a class="nav-link" href="<?= base_url(); ?>admin/Outdoor/presensi">Presensi<?php echo $presensisp;?></a>
      </li>
    </ul>
    <form>
      <a class="border border-success rounded" href="<?= base_url(); ?>admin/Outdoor/profil">
        <img src="../assets/images/book.png" alt="Foto Profil">
      </a><br>
      <a href="<?= base_url(); ?>admin/Outdoor/profil">Nama</a>|
      <!-- Button trigger modal -->
      <a href="#" data-toggle="modal" data-target="#exampleModal">
        Logout
      </a>
    </form>
  </div>
</nav>
<!-- end navbar -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin mau keluar?
      </div>
      <div class="modal-footer">
        <a href="<?= base_url(); ?>" class="btn btn-primary">Ya</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
      </div>
    </div>
  </div>
</div>
</header>


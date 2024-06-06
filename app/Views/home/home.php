<?= $this->extend('layouts/home_layout') ?>
<?= $this->section('head') ?>
<title>Home</title>
<?= $this->endSection() ?>
<?= $this->section('content')?>
<div class="text-center">
  <div class="logo-container d-inline-block bg-white rounded-circle p-1 border">
    <img src="<?= base_url('assets/images/logo.png');?>" width="100" height="100" class="img-fluid" alt="Logo">
  </div>
  <h1 class="display-4 fw-bold text-body-emphasis">E-Library <br> <span class="text-primary" style="color: #f4d03f;">SMKN 6 Kota Jambi</span></h1>
</div>
<div class="px-4 pt-5 my-5 text-center border-bottom">
  <div class="col-lg-6 mx-auto">
     <h4> Masuk  Sebagai  Apa?</p> </h4>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
      <a href="<?= base_url('login');?>" class="btn btn-primary btn-lg px-4 me-sm-3">Admin</a>
      <a href="<?= base_url('book');?>" class="btn btn-outline-secondary btn-lg px-4">Anggota</a>
    </div>
  </div>
  <div class="overflow-hidden" style="max-height: 45vh;">
  </div>
</div>
<?= $this->endSection()?>
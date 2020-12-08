<?= $this->extend('layout/page_layout'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Selamat datang, <?= session()->get('firstname') ?></h1>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>
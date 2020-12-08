<?= $this->extend('layout/page_layout'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url(); ?>/assets/img/<?= $buku['sampul']; ?>" class="card-img ml-2 mt-3 mb-3 mr-3" alt="image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title"><?= $buku['judul']; ?></h1>
                            <p class="card-text"><b>ISBN : </b><?= $buku['ISBN']; ?></p>
                            <p class="card-text"><b>Pengarang : </b><?= $buku['pengarang']; ?></p>
                            <p class="card-text"><b>Halaman :</b><?= $buku['eksemplar']; ?></p>
                            <p class="card-text"><small class="text-muted"><b>Penerbit : </b><?= $buku['penerbit']; ?></small></p>
                            <p class="card-text"><small class="text-muted"><b>Tahun : </b><?= $buku['tahun_terbit']; ?></small></p>
                            <a href="/buku" class="btn btn-secondary">kembali ke daftar</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
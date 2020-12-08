<?= $this->extend('layout/page_layout'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <h2>Katalog Buku</h2>
            <div class="d-flex justify-content-end">
                <a href="/katalog/add" class="btn btn-success mb-3">Tambah Buku</a>
            </div>
            <hr>
            <?php if (session()->get('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->get('success') ?>
                </div>
            <?php endif; ?>
            <?php if (session()->get('error')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->get('error') ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="row">
        <!-- <div class="mb-3"> -->
        <div class="table-responsive">
            <table class="table table-hover">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Sampul</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Pengarang</th>
                            <th scope="col">Eksemplar</th>
                            <th scope="col">Ditambahkan pada</th>
                            <th scope="col" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter = 0;
                        foreach ($buku as $buku) : ?>
                            <tr data-toggle="collapse" data-target="#accordion-<?= $buku['id'] ?>" class="clickable">
                                <th scope="row"><?= $counter += 1 ?></th>
                                <td>
                                    <img src="<?= base_url(); ?>/assets/img/<?= $buku['sampul']; ?>" alt="" class="sampul">
                                </td>
                                <td><?= $buku['judul']; ?></td>
                                <td><?= $buku['pengarang']; ?></td>
                                <td><?= $buku['eksemplar']; ?></td>
                                <td><?= $buku['created_at']; ?></td>
                                <td><a href="edit/<?= $buku['id']; ?>" class="btn btn-success">Edit</a></td>
                                <td><a href="delete/<?= $buku['id']; ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <tr id="accordion-<?= $buku['id'] ?>" class="collapse">
                                <td></td>
                                <td colspan="6">
                                    <div>
                                        <span><b>ISBN</b>: <?= $buku['ISBN']; ?></span><br>
                                        <span><b>Penerbit</b>: <?= $buku['penerbit']; ?></span><br>
                                        <span><b>Tahun Terbit</b>: <?= $buku['tahun_terbit']; ?></span><br>
                                        <span><b>Kategori</b>: <?= $buku['kategori']; ?></span>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>
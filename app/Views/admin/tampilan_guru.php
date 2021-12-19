<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include("layout/navbar_admin"); ?>
<div class="container">
    <h1 class="text-center">Halaman tampilan guru</h1>
    <?php if(session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <?php endif; ?>
    <a href="/admin/add_guru" class="btn btn-success my-2">Tambah Guru</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Nomer Induk</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach ($guru as $g) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $g['nama_user']; ?></td>
                <td><?= $g['NIP']; ?></td>
                <td><?= $g['alamat_user']; ?></td>
                <td><?= $g['jenis_kelamin']; ?></td>
                <td><a class="btn btn-success" href="/admin/detail_guru/<?= $g['id_user']; ?>" role="button">Detail</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>
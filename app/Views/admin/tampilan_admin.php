<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include("layout/navbar_admin"); ?>
<div class="container">
    <h1 class="text-center">Halaman tampilan admin</h1>
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
            <?php $i=1; foreach ($admin as $a) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $a['nama_user']; ?></td>
                <td><?= $a['NIP']; ?></td>
                <td><?= $a['alamat_user']; ?></td>
                <td><?= $a['jenis_kelamin']; ?></td>
                <td><a class="btn btn-success" href="../admin/detail_admin/<?= $a['id_user']; ?>"
                        role="button">Detail</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include("layout/navbar_admin"); ?>
<div class="container">

    <h1 class="text-center">halaman tampilan siswa</h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Nomer Induk</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Kelas</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach ($siswa as $s) :?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $s['nama_user']; ?></td>
                <td><?= $s['NIP']; ?></td>
                <td><?= $s['jenis_kelamin']; ?></td>
                <td><?= $s['nama_kelas']; ?></td>
                <td><a class="btn btn-success" href="../detail_siswa/<?= $s['id_user']; ?>" role="button">Link</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>
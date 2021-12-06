<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include("layout/navbar_admin"); ?>
<div class="container">
    <h1 class="text-center">Halaman Utama Admin</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach ($siswa as $s) :?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $s['nama_user']; ?></td>
                <td><?= $s['NIP']; ?></td>
                <td><?= $s['nama_kelas']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include("layout/navbar_admin"); ?>
<div class="container">
    <h1 class="text-center">Daftar Kelas</h1>
    <div class="card w-25">
        <div class="card-body">
            <?php foreach ($siswa as $s => $value) : ?>
            <h5 class="card-title"><?= $value['nama_kelas']; ?></h5>
            <a href="#" class="btn btn-primary">Button</a>
            <?php dd($siswa); ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
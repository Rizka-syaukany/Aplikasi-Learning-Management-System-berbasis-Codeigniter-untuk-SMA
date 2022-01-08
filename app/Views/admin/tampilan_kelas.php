<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include("layout/navbar_admin"); ?>
<div class="container">
    <h1 class="text-center">Daftar Kelas</h1>
    <?php if(session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <?php endif; ?>
    <a href="/admin/add_siswa" class="btn btn-success">tambah siswa</a>
    <?php foreach ($kelas as $k) : ?>
    <div class="card w-25 mt-10">
        <div class="card-body ">
            <h5 class="card-title"><?= $k['nama_kelas']; ?></h5>
            <a href="tampilan_siswa/<?= $k['id_kelas']; ?>" class="btn btn-primary">Tampilkan</a>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection(); ?>
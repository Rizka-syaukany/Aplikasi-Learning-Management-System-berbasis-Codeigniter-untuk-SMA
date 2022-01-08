<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include("layout/navbar_admin"); ?>

<h1 class="text-center">Halaman Utama Tampilan</h1>
<div class="container">
    <div class="card w-75 my-2">
        <div class="card-body">
            <h5 class="card-title">Tampilkan table siswa</h5>
            <p class="card-text">tempat untuk menampilkan table siswa</p>
            <a href="/admin/tampilan_kelas" class="btn btn-primary">Tampilkan</a>
        </div>
    </div>
    <div class="card w-75 my-2">
        <div class="card-body">
            <h5 class="card-title">Tampilkan table Guru</h5>
            <p class="card-text">tempat untuk menampilkan table guru</p>
            <a href="/admin/tampilan_guru" class="btn btn-primary">Tampilkan</a>
        </div>
    </div>
    <div class="card w-75 my-2">
        <div class="card-body">
            <h5 class="card-title">Tampilkan table admin</h5>
            <p class="card-text">tempat untuk menampilkan table kelas</p>
            <a href="/admin/tampilan_admin" class="btn btn-primary">Tampilkan</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
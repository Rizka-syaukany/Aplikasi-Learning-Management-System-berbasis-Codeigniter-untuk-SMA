<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include("layout/navbar_admin"); ?>
<?= $this->include("layout/sidenavbar"); ?>

<div class="col-md-10 ml-auto">
<div class="shadow-sm p-3 mb-5 bg-white">
    <h1 class="text-center mt-5 mb-5">Halaman Utama Tampilan</h1>
</div>
<div class="shadow-sm p-5 bg-white">
<div class="card-deck">
    <div class="row">
    <div class="card bg-primary ml-5" id="card-tampilan">
        <div class="card-body">
            <div class="card-body-icon">
                <i class="fas fa-user-graduate"></i>
            </div>
            <h5 class="card-title text-white">Tampilkan Table Siswa</h5>
            <p class="card-text text-white">Tempat Untuk Menampilkan Table Siswa</p>
            <a href="/admin/tampilan_kelas" class="btn btn-warning rounded-0">Tampilkan</a>
        </div>
    </div>
    <div class="card bg-danger" id="card-tampilan">
        <div class="card-body">
        <div class="card-body-icon">
            <i class="fas fa-chalkboard-teacher"></i>
        </div>
            <h5 class="card-title text-white">Tampilkan Table Guru</h5>
            <p class="card-text text-white">Tempat Untuk Menampilkan Table Guru</p>
            <a href="/admin/tampilan_guru" class="btn btn-info rounded-0">Tampilkan</a>
        </div>
    </div>
    <div class="card bg-success" id="card-tampilan">
        <div class="card-body">
<<<<<<< HEAD
        <div class="card-body-icon">
                    <i class="fas fa-school"></i>
                </div>
            <h5 class="card-title text-white">Tampilkan Table Admin</h5>
            <p class="card-text text-white">Tempat Untuk Menampilkan Table Kelas</p>
            <a href="/admin/tampil_admin" class="btn btn-danger rounded-0">Tampilkan</a>
=======
            <h5 class="card-title">Tampilkan table admin</h5>
            <p class="card-text">tempat untuk menampilkan table kelas</p>
            <a href="/admin/admin" class="btn btn-primary">Tampilkan</a>
>>>>>>> f5c08cec8c1b2e00240e3e5ee99db6d7da017252
        </div>
    </div>
    </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>
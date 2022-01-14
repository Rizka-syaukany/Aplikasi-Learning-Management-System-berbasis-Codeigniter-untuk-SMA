<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include("layout/navbar_admin"); ?>
<?= $this->include("layout/sidenavbar"); ?>

<div class="col-md-10 ml-auto">
    <div class="shadow-sm p-3 mb-5 bg-white">
        <h1 class="text-center mb-5 mt-5">Halaman Utama Update</h1>
    </div>
    <div class="shadow-sm p-5 bg-white">
    <div class="card-deck">
    <div class="row">
        <div class="card bg-warning ml-5" id="card-update">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <h5 class="card-title text-white">Edit Table Siswa</h5>
                <p class="card-text text-white">Tempat Untuk Melakukan Update Pada Table Siswa</p>
                <a href="/admin/update_siswa" class="btn btn-danger" style="border-radius: 0%">Update Data >></a>
            </div>
        </div>
        <div class="card bg-info" id="card-update">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h5 class="card-title text-white">Edit Table Guru</h5>
                <p class="card-text text-white">Tempat Untuk Melakukan Update Pada Table Guru</p>
                <a href="/admin/update_guru" class="btn btn-light" style="border-radius: 0%">Update Data >></a>
            </div>
        </div>
        <div class="card bg-danger" id="card-update">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-school"></i>
                </div>
                <h5 class="card-title text-white">Edit Table Kelas</h5>
                <p class="card-text text-white">Tempat Untuk Melakukan Update Pada Table Kelas</p>
                <a href="/admin/update_kelas" class="btn btn-warning" style="border-radius: 0%">Update Data >></a>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>
<?= $this->endSection(); ?>
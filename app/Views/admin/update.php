<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include("layout/navbar_admin"); ?>

<h1 class="text-center">Halaman Utama Update</h1>
<div class="container">
    <div class="card w-75 my-2">
        <div class="card-body">
            <h5 class="card-title">Edit table siswa</h5>
            <p class="card-text">tempat untuk melakukan update pada table siswa</p>
            <a href="/admin/update_siswa" class="btn btn-primary">Button</a>
        </div>
    </div>
    <div class="card w-75 my-2">
        <div class="card-body">
            <h5 class="card-title">Edit table Guru</h5>
            <p class="card-text">tempat untuk melakukan update pada table guru</p>
            <a href="/admin/update_guru" class="btn btn-primary">Button</a>
        </div>
    </div>
    <div class="card w-75 my-2">
        <div class="card-body">
            <h5 class="card-title">Edit table kelas</h5>
            <p class="card-text">tempat untuk melakukan update pada table kelas</p>
            <a href="/admin/update_kelas" class="btn btn-primary">Button</a>
        </div>
    </div>
    <!-- <div class="card w-75 my-2">
        <div class="card-body">
            <h5 class="card-title">Edit table siswa</h5>
            <p class="card-text">tempat untuk melakukan update pada table siswa</p>
            <a href="#" class="btn btn-primary">Button</a>
        </div>
    </div> -->
</div>
<?= $this->endSection(); ?>
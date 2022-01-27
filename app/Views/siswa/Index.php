<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include("layout/navbar_siswa"); ?>
<?= $this->include("layout/sidenavbar_siswa"); ?>

<div class="col-md-10 py-3 ml-auto">
    <div class="shadow-sm p-5 mb-5 bg-white">
        <h2 class="text-center">Selamat Datang di Halaman Utama Siswa</h2>
    </div>
</div>

<?= $this->endsection(); ?>
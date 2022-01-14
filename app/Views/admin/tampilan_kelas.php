<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include("layout/navbar_admin"); ?>
<?= $this->include("layout/sidenavbar"); ?> <div class="col-md-10 ml-auto">
    <div class="shadow-sm p-3 mb-5 bg-white">
        <h1 class="text-center mt-5 mb-5">Daftar Kelas</h1>
        <h1 class="text-center">Daftar Kelas</h1>
        <?php if(session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
        <?php endif; ?>
    </div>

    <div class="shadow-sm py-3 px-7 bg-white">
        <a href="/admin/add_siswa" class="btn btn-success">tambah siswa</a>

        <div class="container">

            <a href="/admin/add_siswa" class="btn btn-success">tambah siswa</a>


            <?php foreach ($kelas as $k) : ?>
            <div class="ml-5">
                <div class="card w-75 mt-10" style="">
                    <div class="card-body bg-danger text-white">
                        <div class="card-body-icon">
                            <i class="fas fa-school"></i>
                        </div>
                        <h5 class="card-title"><?= $k['nama_kelas']; ?></h5>
                        <a href="tampilan_siswa/<?= $k['id_kelas']; ?>" class="btn btn-warning">Tampilkan</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
    <?= $this->endSection(); ?>
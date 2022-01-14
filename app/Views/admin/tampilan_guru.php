<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include("layout/navbar_admin"); ?>
<?= $this->include("layout/sidenavbar"); ?>

<div class="container">
<<<<<<< HEAD
<div class="col-md-10 ml-auto">
    <div class="shadow-sm p-3 mb-5 bg-white">
        <h1 class="text-center mt-5 mb-5">Halaman Tampilan Guru</h1>
    </div>

    <div class="shadow-sm p-3 mb-5 bg-white">
    <a href="/admin/add_guru" class="btn btn-success mb-3 rounded-0">Tambah Guru</a>
    <table class="table table-stripped">
=======
    <h1 class="text-center">Halaman tampilan guru</h1>
    <?php if(session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <?php endif; ?>
    <a href="/admin/add_guru" class="btn btn-success my-2">Tambah Guru</a>
    <table class="table">
>>>>>>> f5c08cec8c1b2e00240e3e5ee99db6d7da017252
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nomer Induk</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach ($guru as $g) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $g['nama_user']; ?></td>
                <td><?= $g['NIP']; ?></td>
                <td><?= $g['alamat_user']; ?></td>
                <td><?= $g['jenis_kelamin']; ?></td>
<<<<<<< HEAD
                <td><a class="btn btn-success rounded-0" href="/admin/detail_guru/<?= $g['id_user']; ?>" role="button">Detail</a>
=======
                <td><a class="btn btn-success" href="/admin/detail_guru/<?= $g['id_user']; ?>" role="button">Detail</a>
                    <form action="/admin/deleteGuru/<?= $g['id_user']; ?> " method="POST" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('apakah anda yakin untuk menghapus <?= $g['nama_user']; ?>')">Delete</button>
                    </form>
                    <a href="/admin/updateGuru/<?= $g['id_user'];  ?>" class="btn btn-warning">Edit</a>
>>>>>>> f5c08cec8c1b2e00240e3e5ee99db6d7da017252
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>
</div>
<?= $this->endSection(); ?>
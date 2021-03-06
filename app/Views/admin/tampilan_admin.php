<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include("layout/navbar_admin"); ?>
<div class="container mt-3">
    <h1 class="text-center">Halaman tampilan admin</h1>
    <?php if(session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <?php endif; ?>
    <a href="/admin/add_admin" class="btn btn-success my-2">Tambah Admin</a>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Nomer Induk</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach ($admin as $a) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $a['nama_user']; ?></td>
                <td><?= $a['NIP']; ?></td>
                <td><?= $a['alamat_user']; ?></td>
                <td><?= $a['jenis_kelamin']; ?></td>
                <td><a class="btn btn-success" href="../admin/detail_admin/<?= $a['id_user']; ?>"
                        role="button">Detail</a>
                    <form action="/admin/<?= $a['id_user']; ?> " method="POST" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('apakah anda yakin untuk menghapus <?= $a['nama_user']; ?>')">Delete</button>
                        <a href="/admin/updateAdmin/<?= $a['id_user'];  ?>" class="btn btn-warning">Edit</a>

                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>
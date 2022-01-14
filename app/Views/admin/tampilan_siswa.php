<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include("layout/navbar_admin"); ?>
<?= $this->include("layout/sidenavbar"); ?>
<div class="container">

    <h1 class="text-center">Halaman Tampilan Siswa</h1>

    <div class="col-md-10 ml-auto">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nomer Induk</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach ($siswa as $s) :?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $s['nama_user']; ?></td>
                    <td><?= $s['NIP']; ?></td>
                    <td><?= $s['jenis_kelamin']; ?></td>
                    <td><?= $s['nama_kelas']; ?></td>

                    <td><a class="btn btn-success" href="../detail_siswa/<?= $s['id_user']; ?>" role="button">Detail</a>
                        <form action="/admin/delete_daftar/<?= $s['id_user']; ?> " method="POST" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('apakah anda yakin untuk menghapus <?= $s['nama_user']; ?>')">Delete</button>
                        </form>
                        <a href="/admin/updateSiswa/<?= $s['id_user'];  ?>" class="btn btn-warning">Edit</a>
                    </td>

                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>
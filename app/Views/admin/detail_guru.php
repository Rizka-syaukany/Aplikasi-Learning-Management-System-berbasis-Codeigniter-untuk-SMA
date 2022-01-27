<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include("layout/navbar_admin"); ?>

<div class="container ">
    <div class="card mx-auto mt-5 pt-3" style="max-width: 540px;">
        <?php  foreach($detail as $d) ?>
        <h4 class="text-center mt-2 py-3">Detail Guru</h4>
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="/img/<?= $d['profile_user']; ?>" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <td scope="col"><?= $d['nama_user']; ?></td>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td><?= $d['alamat_user']; ?></td>

                            </tr>
                            <tr>
                                <th scope="row">no Telpon</th>
                                <td><?= $d['telp_user']; ?></td>

                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td><?= $d['email_user']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis Kelamin</th>
                                <td><?= $d['jenis_kelamin']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">NIP</th>
                                <td><?= $d['NIP']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
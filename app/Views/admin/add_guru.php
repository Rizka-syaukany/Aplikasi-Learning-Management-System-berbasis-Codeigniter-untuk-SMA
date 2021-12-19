<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-4">Form Tambah Siswa</h2>
            <form action="/admin/save" method="POST">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="nama_user" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_user" id="nama_user" autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nip" class="col-sm-2 col-form-label">Nomer induk</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="nip" id="nip">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat" id="alamat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email_user" class="col-sm-2 col-form-label">email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email_user" id="email_user">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telp_user" class="col-sm-2 col-form-label">no telp</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="telp_user" id="telp_user">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="profile_user" class="col-sm-2 col-form-label">profile</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="profile_user" id="profile_user">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
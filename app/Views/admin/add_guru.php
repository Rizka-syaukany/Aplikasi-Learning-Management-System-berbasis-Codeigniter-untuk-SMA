<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-4">Form Tambah Siswa</h2>
            <?= $validation->listErrors(); ?>
            <form action="/admin/save" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="nama_user" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control  <?= ($validation->hasError('nama_user')) ? 'is-invalid':''; ?>"
                            name="nama_user" id="nama_user" autofocus value="<?= old('nama_user'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama_user'); ?>
                        </div>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="nip" class="col-sm-2 col-form-label">Nomer induk</label>
                    <div class="col-sm-10">
                        <input type="number"
                            class="form-control <?= ($validation->hasError('nip')) ? 'is-invalid':''; ?>" name="nip"
                            id="nip" value="<?= old('nip'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nip'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat" id="alamat" value="<?= old('alamat'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin"
                            value="<?= old('jenis_kelamin'); ?>">
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                        <!-- <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin"> -->
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email_user" class="col-sm-2 col-form-label">email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email_user" id="email_user"
                            value="<?= old('email_user'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" id="password"
                            value="<?= old('password'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telp_user" class="col-sm-2 col-form-label">no telp</label>
                    <div class="col-sm-10">
                        <input type="number"
                            class="form-control <?= ($validation->hasError('telp_user')) ? 'is-invalid':''; ?>"
                            name="telp_user" id="telp_user" value="<?= old('telp_user'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('telp_user'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="profile_user" class="col-sm-2 col-form-label">profile</label>
                    <div class="col-sm-10">
                        <label for="profile_user">upload file</label>
                        <input type="file" class="form-control-file" id="profile_user" name="profile_user">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah data</button>
                        <a href="/admin/tampilan_guru" class="btn btn-danger my-2">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
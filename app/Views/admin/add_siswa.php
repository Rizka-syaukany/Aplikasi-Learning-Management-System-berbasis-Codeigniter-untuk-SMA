<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include("layout/navbar_admin"); ?>

<?= $this->include("layout/sidenavbar"); ?>

<div class="col-md-10 ml-auto">
    <div class="shadow-sm p-3 mb-5 bg-white">
        <h2 class="text-center mt-5 mb-5">Form Tambah Siswa</h2>
    </div>
<div class="container">
    <div class="row ml-5">
        <div class="col-10 ml-3">

            <?= $validationSiswa->listErrors(); ?>
            <form action="/admin/saveSiswa" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="nama_user" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control  <?= ($validationSiswa->hasError('nama_user')) ? 'is-invalid':''; ?>"
                            name="nama_user" id="nama_user" autofocus value="<?= old('nama_user'); ?>">
                        <div class="invalid-feedback">
                            <?= $validationSiswa->getError('nama_user'); ?>
                        </div>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="nip" class="col-sm-2 col-form-label">Nomor Induk</label>
                    <div class="col-sm-10">
                        <input type="number"
                            class="form-control <?= ($validationSiswa->hasError('nip')) ? 'is-invalid':''; ?>"
                            name="nip" id="nip" value="<?= old('nip'); ?>">
                        <div class="invalid-feedback">
                            <?= $validationSiswa->getError('nip'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control <?= ($validationSiswa->hasError('alamat')) ? 'is-invalid':''; ?>"
                            name="alamat" id="alamat" value="<?= old('alamat'); ?>">
                        <div class="invalid-feedback">
                            <?= $validationSiswa->getError('alamat'); ?>
                        </div>
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
                    <label for="email_user" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email"
                            class="form-control  <?= ($validationSiswa->hasError('email_user')) ? 'is-invalid':''; ?> "
                            name="email_user" id="email_user" value="<?= old('email_user'); ?>">
                        <div class="invalid-feedback">
                            <?= $validationSiswa->getError('email_user'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control
                            <?= ($validationSiswa->hasError('password')) ? 'is-invalid':''; ?>" name=" password"
                            id="password" value="<?= old('password'); ?>">
                        <div class="invalid-feedback">
                            <?= $validationSiswa->getError('password'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telp_user" class="col-sm-2 col-form-label">No telp</label>
                    <div class="col-sm-10">
                        <input type="number"
                            class="form-control <?= ($validationSiswa->hasError('telp_user')) ? 'is-invalid':''; ?>"
                            name="telp_user" id="telp_user" value="<?= old('telp_user'); ?>">
                        <div class="invalid-feedback">
                            <?= $validationSiswa->getError('telp_user'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">

                        <select class="form-control" name="kelas" id="kelas" value="<?= old('kelas'); ?>">
                            <option value="" hidden></option>
                            <label for="kelas">Pilih Kelas</label>
                            <?php foreach($kelas as $k): ?>
                            <option value="<?= $k['id_kelas']; ?>"><?= $k['nama_kelas'];  ?></option>
                            <?php endforeach; ?>
                        </select>
                        <!-- <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin"> -->
                    </div>
                </div>
                <div class="form-group row">
                    <label for="profile_user" class="col-sm-2 col-form-label">Profile</label>
                    <div class="col-sm-10 ">
                        <div class="custom-file">
                            <input type="file"
                                class="custom-file-input <?= $validationSiswa->hasError('profile_user') ?'is-invalid':''; ?>"
                                id="profile_user" name="profile_user">
                            <div class="invalid-feedback">
                                <?= $validationSiswa->getError('profile_user'); ?>
                            </div>
                            <label class="custom-file-label" for="profile_user">Choose File</label>
                        </div>
                        <!-- <label for="profile_user">upload file</label>
                        <input type="file" class="form-control-file" id="profile_user" name="profile_user"> -->
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary rounded-0 mr-2">Tambah Data</button>
                        <a href="/admin/tampilan_kelas" class="btn btn-danger my-2 rounded-0">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>
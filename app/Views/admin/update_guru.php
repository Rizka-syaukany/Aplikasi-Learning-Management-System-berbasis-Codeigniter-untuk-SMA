<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include("layout/navbar_admin"); ?>



<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-4">Form update guru</h2>
            <form action="/admin/editguru/<?= $guru->id_user; ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="nama_user" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control  <?= ($validationGuru->hasError('nama_user')) ? 'is-invalid':''; ?>"
                            name="nama_user" id="nama_user" autofocus value="<?= $guru->nama_user; ?>">
                        <div class="invalid-feedback">
                            <?= $validationGuru->getError('nama_user'); ?>
                        </div>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="nip" class="col-sm-2 col-form-label">Nomer induk</label>
                    <div class="col-sm-10">
                        <input type="number"
                            class="form-control <?= ($validationGuru->hasError('nip')) ? 'is-invalid':''; ?>" name="nip"
                            id="nip" value="<?= $guru->NIP; ?>">
                        <div class="invalid-feedback">
                            <?= $validationGuru->getError('nip'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat" id="alamat"
                            value="<?= $guru->alamat_user; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="">
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
                            value="<?= $guru->email_user; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control
                            <?= ($validationGuru->hasError('password')) ? 'is-invalid':''; ?>" name=" password"
                            id="password" value="<?= old('password'); ?>">
                        <div class="invalid-feedback">
                            <?= $validationGuru->getError('password'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telp_user" class="col-sm-2 col-form-label">no telp</label>
                    <div class="col-sm-10">
                        <input type="number"
                            class="form-control <?= ($validationGuru->hasError('telp_user')) ? 'is-invalid':''; ?>"
                            name="telp_user" id="telp_user" value="<?= $guru->telp_user; ?>">
                        <div class="invalid-feedback">
                            <?= $validationGuru->getError('telp_user'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="profile_user" class="col-sm-2 col-form-label">profile</label>
                    <div class="col-sm-10 ">
                        <div class="custom-file">
                            <input type="file"
                                class="custom-file-input <?= $validationGuru->hasError('profile_user') ?'is-invalid':''; ?>"
                                id="profile_user" name="profile_user" value="<?= $guru->profile_user; ?>">
                            <div class="invalid-feedback">
                                <?= $validationGuru->getError('profile_user'); ?>
                            </div>
                            <label class="custom-file-label" for="profile_user">Choose file</label>
                        </div>
                        <!-- <label for="profile_user">upload file</label>
                        <input type="file" class="form-control-file" id="profile_user" name="profile_user"> -->
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah data</button>
                        <a href="/admin/tampil_admin" class="btn btn-danger my-2">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
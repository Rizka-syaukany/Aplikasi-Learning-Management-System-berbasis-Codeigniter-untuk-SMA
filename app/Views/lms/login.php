<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class=" flex flex-col w-4/12 mx-auto shadow-xl bg-white bg-opacity-90 rounded-xl py-6 mt-10 px-10">
    <h1 class="text-center">LOGIN</h1>
    <img src="/img/logolms.png" alt="" height="400" width="300" class="mx-auto d-block">
    <br>
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>
    <form action="/auth/v_login" method="POST">
        <div class="flex flex-col mt-4">
            <label class="text-blue-600 font-semibold text-lg" for="email">Email</label>
            <input class="w-full px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100 dark:focus:ring-primary-darker" type="email" name="email_user" id="email_user" placeholder="Masukkan Email" required />
        </div>
        <div class="flex flex-col mt-4">
            <label class="text-blue-600 font-semibold" for="password">Password</label>
            <input class="w-full px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100 dark:focus:ring-primary-darker" id="password" type="password" name="password" placeholder="Masukkan Password" required />
        </div>
        <!--<button type="submit" class="bg-blue-500 hover:bg-blue-600 text-center py-2 text-white mt-4 ml-20">LOGIN</button>-->
        <button type="submit" class="btn btn-primary mt-4 btn-block text-white">LOGIN</button>
    </form>
</div>
<div class="container mt-20">
    <div class="row text-center">

        <div class="col-md-4 col-sm-12 mb-3">
            <a href="">
                <div class="card text-dark">
                    <img src="/img/nature.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <div class="card-title">
                            <h4>Tentang Sekolah</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-sm-6 mb-3">
            <div class="card">
                <img src="/img/nature.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <div class="card-title">
                        <h4>Apa Itu LMS?</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 mb-3">
            <div class="card mb-20">
                <img src="/img/nature.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <div class="card-title">
                        <h4>Belajar Online</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
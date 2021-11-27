<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class=" flex flex-col w-4/12 mx-auto shadow-xl bg-white bg-opacity-90 rounded-xl py-6 mt-10 px-10">
    <h1 class="text-center">Login</h1>
    <div class="flex flex-col mt-4">
        <label class="text-blue-200-" for="username">Username</label>
        <input type="text" class="outline-none border-b-2 border-black" placeholder="Masukan Username">
    </div>
    <div class="flex flex-col mt-4">
        <label class="text-blue-200-" for="password">Password</label>
        <input type="text" class="outline-none border-b-2 border-gray-600" placeholder="Masukan Password">
    </div>
    <a class="bg-blue-500 hover:bg-blue-600 text-center py-2 text-white rounded-full mt-4" href="#">Login</a>

</div>
<?= $this->endSection(); ?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class=" flex flex-col w-4/12 mx-auto shadow-xl bg-white bg-opacity-90 rounded-xl py-6 mt-10 px-10">
    <h1 class="text-center">Login</h1>
    <form action="<?= base_url("/auth"); ?>" method="POST">
        <div class="flex flex-col mt-4">
            <label class="text-blue-200-" for="email">Email</label>
            <input type="email" id="email" class="outline-none border-b-2 border-black" name="email_user" placeholder="Masukan Email">
        </div>
        <div class="flex flex-col mt-4">
            <label class="text-blue-200-" for="password">Password</label>
            <input type="password" id="password" class="outline-none border-b-2 border-gray-600" name="password" placeholder="Masukan Password">
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-center py-2 text-white rounded-full mt-4">Login</button>
    </form>

</div>
<?= $this->endSection(); ?>
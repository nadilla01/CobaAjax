<?php $__env->startSection('title', 'Tambah Data Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="text-center">Tambah Data Mahasiswa</h1>

    <div id="alert-container"></div> <!-- Untuk menampilkan pesan sukses/error -->

    <form id="mahasiswaForm">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim">
        </div>
        <div class="mb-3">
            <label for="fakultas" class="form-label">Fakultas</label>
            <input type="text" class="form-control" id="fakultas" name="fakultas">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rafli\CobaAJax\resources\views/mahasiswa/create.blade.php ENDPATH**/ ?>
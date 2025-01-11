<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100 bg-light">
        <div class="text-center">
            <h1 class="mb-4">Selamat Datang di Sistem Mahasiswa</h1>
            <p class="mb-4">Klik tombol di bawah ini untuk menambahkan data mahasiswa.</p>
            <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-primary btn-lg">Tambah Data Mahasiswa</a>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\Users\rafli\CobaAJax\resources\views/welcome.blade.php ENDPATH**/ ?>
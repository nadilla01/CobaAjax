<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Sistem Mahasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mahasiswa.create') }}">Tambah Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mahasiswa.index') }}">Lihat Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Tambahkan script di sini -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            // Tangkap submit form
            $('#mahasiswaForm').on('submit', function(e) {
                e.preventDefault(); // Hindari reload halaman

                // Ambil data dari form
                let formData = {
                    nama: $('#nama').val(),
                    nim: $('#nim').val(),
                    fakultas: $('#fakultas').val(),
                    _token: $('input[name="_token"]').val() // CSRF Token
                };

                // Kirim data menggunakan AJAX
                $.ajax({
                    url: "{{ route('mahasiswa.store') }}", // URL ke metode store
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        // Tampilkan pesan sukses
                        $('#alert-container').html(`
                                <div class="alert alert-success">
                                    ${response.message}
                                </div>
                            `);

                        // Kosongkan form
                        $('#mahasiswaForm')[0].reset();
                    },
                    error: function(xhr) {
                        // Tangani error validasi
                        let errors = xhr.responseJSON.errors;
                        let errorMessage = '<div class="alert alert-danger"><ul>';
                        for (let field in errors) {
                            errorMessage += `<li>${errors[field][0]}</li>`;
                        }
                        errorMessage += '</ul></div>';

                        $('#alert-container').html(errorMessage);
                    }
                });
            });
        });
    </script>
</body>

</html>

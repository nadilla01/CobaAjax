@extends('layouts.navbar')

@section('title', 'Tambah Data Mahasiswa')

@section('content')
    <h1 class="text-center">Tambah Data Mahasiswa</h1>

    <div id="alert-container"></div> <!-- Untuk menampilkan pesan sukses/error -->

    <form id="mahasiswaForm">
        @csrf
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
@endsection

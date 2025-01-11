<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all(); // Ambil semua data mahasiswa
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:15|unique:mahasiswas,nim',
            'fakultas' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        $mahasiswa = Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'fakultas' => $request->fakultas,
        ]);

        // Jika permintaan menggunakan AJAX, kembalikan JSON
        if ($request->ajax()) {
            return response()->json([
                'message' => 'Data mahasiswa berhasil disimpan!',
                'data' => $mahasiswa,
            ]);
        }

        // Jika permintaan biasa, redirect ke halaman index
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil disimpan!');
    }
}
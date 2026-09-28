<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route GET: Menampilkan Formulir Mahasiswa
Route::get('/form-mahasiswa', function () {
    return view('form-mahasiswa');
});

// Route POST: Memproses dan Memvalidasi Data Formulir
Route::post('/form-mahasiswa', function (Request $request) {
    // 1. Pre-processing / Sanitasi Input
    $input = $request->all();

    // Sanitasi NIM: Hapus spasi di awal dan akhir string
    if (isset($input['nim'])) {
        $input['nim'] = trim($input['nim']);
    }

    // Sanitasi Nama: Hapus tag HTML demi keamanan
    if (isset($input['nama'])) {
        $input['nama'] = strip_tags($input['nama']);
    }

    // Timpa request dengan data yang sudah disanitasi sebelum validasi
    $request->merge($input);

    // 2. Validasi Server-Side
    $validatedData = $request->validate([
        'nim'   => 'required|digits_between:8,12',
        'nama'  => 'required|min:3',
        'email' => 'required|email',
        'usia'  => 'required|integer|min:17|max:100',
    ], [
        // Custom Messages
        'nim.required'          => 'NIM wajib diisi.',
        'nim.digits_between'    => 'NIM harus berupa angka sepanjang 8 hingga 12 digit.',
        'nama.required'         => 'Nama lengkap wajib diisi.',
        'nama.min'              => 'Nama minimal harus terdiri dari 3 karakter.',
        'email.required'        => 'Email wajib diisi.',
        'email.email'           => 'Format email tidak valid.',
        'usia.required'         => 'Usia wajib diisi.',
        'usia.integer'          => 'Usia harus berupa angka integer.',
        'usia.min'              => 'Usia minimal harus 17 tahun.',
        'usia.max'              => 'Usia maksimal adalah 100 tahun.',
    ]);

    // 3. Tampilkan Hasil Jika Validasi Berhasil (Tanpa CSS)
    return view('hasil-mahasiswa', [
        'data' => $validatedData
    ]);
});
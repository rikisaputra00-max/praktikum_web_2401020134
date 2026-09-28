<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/latihan-php', function () {
    // 1. Variabel String (Nama Mahasiswa)
    $nama = 'Riki Andika Saputra';

    // 2. Variabel Array dengan 5 Nilai Integer (Pengujian 1: Lulus)
    $nilai = [60, 65, 70, 55, 68];
    
    // Catatan untuk Pengujian 2 (Perlu Perbaikan):
    // Ubah array di atas menjadi: $nilai = [60, 65, 70, 55, 68];

    // 3. Fungsi Anonim untuk Menghitung Rata-rata
    $hitungRataRata = function (array $data): float {
        $total = 0;
        foreach ($data as $angka) {
            $total += $angka; // Operator Penjumlahan (+=)
        }
        return $total / count($data); // Operator Pembagian (/)
    };

    // Menghitung Rata-rata
    $rataRata = $hitungRataRata($nilai);

    // 4. Percabangan Penentuan Status Kelulusan
    if ($rataRata >= 75) { // Operator Perbandingan (>=)
        $status = 'Lulus';
    } else {
        $status = 'Perlu Perbaikan';
    }

    // Mengirim Data ke View 'latihan-php'
    return view('latihan-php', compact(
        'nama', 'nilai', 'rataRata', 'status'
    ));
});
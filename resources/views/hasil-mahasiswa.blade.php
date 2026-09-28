<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pendaftaran Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa Berhasil Disimpan</h1>
    <p>NIM: {{ $data['nim'] }}</p>
    <p>Nama: {{ $data['nama'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Usia: {{ $data['usia'] }} Tahun</p>

    <br>
    <a href="/form-mahasiswa">Kembali ke Form</a>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir Data Mahasiswa</title>
</head>
<body>
    <h1>Formulir Data Mahasiswa</h1>

    {{-- Menampilkan Daftar Ringkasan Error jika Validasi Gagal --}}
    @if ($errors->any())
        <div>
            <p><strong>Terjadi kesalahan input:</strong></p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/form-mahasiswa" method="POST">
        @csrf {{-- Keamanan CSRF Token --}}

        <div>
            <label for="nim">NIM:</label><br>
            <input type="text" id="nim" name="nim" value="{{ old('nim') }}">
            @error('nim')
                <br><span><small>{{ $message }}</small></span>
            @enderror
        </div>
        <br>

        <div>
            <label for="nama">Nama Lengkap:</label><br>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}">
            @error('nama')
                <br><span><small>{{ $message }}</small></span>
            @enderror
        </div>
        <br>

        <div>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <br><span><small>{{ $message }}</small></span>
            @enderror
        </div>
        <br>

        <div>
            <label for="usia">Usia:</label><br>
            <input type="text" id="usia" name="usia" value="{{ old('usia') }}">
            @error('usia')
                <br><span><small>{{ $message }}</small></span>
            @enderror
        </div>
        <br>

        <button type="submit">Kirim Data</button>
    </form>
</body>
</html>
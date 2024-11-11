<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jenis Layanan</title>
</head>
<body>
    <h1 align="center">Tambah Jenis Layanan</h1>
    <form align="center" action="{{ route('layanan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="">Nama: </label>
        <input type="text" name="nama_layanan">
        @error('nama_layanan')
            <small>{{ $message }}</small>
        @enderror
        <br>
        <br>

        <label for="">Harga: </label>
        <input type="number" name="harga">
        @error('harga')
            <small>{{ $message }}</small>
        @enderror
        <br>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
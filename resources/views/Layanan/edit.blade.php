<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jenis Layanan</title>
</head>
<body>
    <h1 align="center">Edit Jenis Layanan</h1>
    <a href="{{ route('layanan.index') }}">Data Layanan</a>
    <form align="center" action="{{ route('layanan.update', ['id' => $layanan->id_layanan]) }}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('PUT')
        <label for="">Nama: </label>
        <input type="text" name="nama_layanan" value="{{ $layanan->nama_layanan }}">
        <br>
        <br>
        <label for="">Harga: </label>
        <input type="number" name="harga" value="{{ $layanan->harga }}">
        <br>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
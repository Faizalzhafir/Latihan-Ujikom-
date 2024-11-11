<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsumen</title>
</head>
<body>
    <h1 align="center">Edit Data Konsumen</h1>
    <h3 align="center">Data Konsumen</h3>
    <a href="{{ route('konsumen.index') }}">Data Konsumen</a>

    <form align="center" action="{{ route('konsumen.update', ['id' => $konsumen->id_konsumen ]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="">Nama</label>
        <input type="text" name="nama" value="{{ $konsumen->nama }}">
        <br>
        <br>
        <label for="">Telepon</label>
        <input type="number" name="telepon" value="{{ $konsumen->telepon }}">
        <br>
        <br>
        <label for="">Alamat</label>
        <textarea name="alamat">{{ $konsumen->alamat }}</textarea>
        <br>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
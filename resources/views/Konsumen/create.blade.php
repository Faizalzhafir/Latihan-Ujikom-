<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Konsumen</title>
</head>
<body>
    <h1 align="center">Tambah Data Konsumen</h1>
    <h3 align="center">Data Konsumen</h3>

    <form align="center"  action="{{ route('konsumen.store') }}" method="POST" enctype="multipart/fprm-data">
        @csrf

        <label for="">Nama: </label>
        <input type="text" name="nama">
        <br>
        <br>
        <label for="">Telepon</label>
        <input type="number" name="telepon">
        <br>
        <br>
        <label for="">Alamat</label>
        <textarea name="alamat"></textarea>
        <br>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
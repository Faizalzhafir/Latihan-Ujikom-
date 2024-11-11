<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pakaian</title>
</head>
<body>
    <h1 align="center">Edit Data Pakaian</h1>
    <h3 align="center">Data Pakaian</h3>

    <form align="center" action="{{ route('pakaian.update', ['id' => $pakaian->id_pakaian]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="">Nama: </label>
        <input type="text" name="nama_pakaian" value="{{ $pakaian->nama_pakaian }}">
        <br>
        <br>
        <label for="">Harga: </label>
        <input type="number" name="harga" value="{{ $pakaian->harga }}">
        <br>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jenis Pemayaran</title>
</head>
<body>
    <h1 align="center">Tambah Jenis Pembayaran</h1>
    <form align="center" action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="">Nama: </label>
        <input type="text" name="nama_pembayaran">
        @error('nama_pembayaran')
            <small>{{ $message }}</small>
        @enderror
        <br>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
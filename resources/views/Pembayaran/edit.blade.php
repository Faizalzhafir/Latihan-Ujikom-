<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jenis Pembayaran</title>
</head>
<body>
    <h1 align="center">Edit Jenis Pembayaran</h1>
    <h3 align="center">Data Jenis Pembayaran</h3>
    <form align="center" action="{{ route('pembayaran.update',['id' => $pembayaran->id_pembayaran]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="text" name="nama_pembayaran" value="{{ $pembayaran->nama_pembayaran }}">
        <br>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
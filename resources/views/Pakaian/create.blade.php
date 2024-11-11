<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pakaian</title>
</head>
<body>
    <h1 align="center">Data Pakaian</h1>
    

    <form align="center" action="{{ route('pakaian.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <label for="">Nama: </label>
        <input type="text" name="nama_pakaian">
        <br>
        <br>
        <label for="">Harga: </label>
        <input type="number" name="harga">
        <br>
        <br>
        <!-- <label for="">Konfirmasi Password: </label>
        <input type="password">
        <br>
        <br> -->
        <button type="msumit">Simpan</button>
    </form>
</body>
</html>
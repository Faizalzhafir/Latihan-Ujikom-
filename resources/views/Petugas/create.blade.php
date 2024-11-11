<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas</title>
</head>
<body>
    <h1 align="center">Data Petugas</h1>
    

    <form align="center" action="{{ route('store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <label for="">Nama: </label>
        <input type="text" name="name">
        @error('name')
            <small>{{ $message }}</small>
        @enderror
        <br>
        <br>
        <label for="">Email: </label>
        <input type="email" name="email">
        @error('email')
            <small>{{ $message }}</small>
        @enderror
        <br>
        <br>
        <label for="">Password: </label>
        <input type="password" name="password">
        @error('password')
            <small>{{ $password }}</small>
        @enderror
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
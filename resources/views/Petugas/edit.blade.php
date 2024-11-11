<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Petugas</title>
</head>
<body>
    <h1 align="center">Edit Data Petugas</h1>
    <h3 align="center">Data Petugas</h3>

    <form align="center" action="{{ route('petugas.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="">Nama: </label>
        <input type="text" name="name" value="{{ $user->name }}">
        <br>
        <br>
        <label for="">Email: </label>
        <input type="email" name="email" value="{{ $user->email }}">
        <br>
        <br>
        <label for="">Password: </label>
        <input type="password" name="password">
        <br>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
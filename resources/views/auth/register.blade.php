<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
</head>
<body>
    <h1 align="center">Ini halaman Register</h1>
    <br>
    <form align="center" action="{{ route('register_proses') }}" method="post">
        @csrf

        <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}">
        @error('name')
            <small>{{ $message }}</small>
        @enderror
        <br>
        <br>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        @error('email')
            <small>{{ $message }}</small>
        @enderror
        <br>
        <br>
        <input type="password" name="password" placeholder="Password">
        @error('password')
            <small>{{ $message }}</small>
        @enderror
        <br>
        <br>
        <!-- <label>Role:
            <select name="role" required>
                <option value="">--Role--</option>
                <option value="Admin">Admin</option>
                <option value="Petugas">Petugas</option>
                <option value="Pimpinan">Pimpinan</option>
            </select>
        </label>
        <br>
        <br> -->
        <button type="submit">Simpan</button>
        <br>
        <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Transaksi</title>
</head>
<body>
    <h1 align="center">Edit Data Tramsaksi</h1>

    <form align="center" action="{{ route('update', ['id' => $transaksi->id_transaksi]) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="">Status</label>
        <input type="text" name="status" value="{{ $transaksi->status }}">
        <br>
        <br>
        <label for="">Status Order</label>
        <input type="text" name="status_order" value="{{ $transaksi->status_order }}">
        <br>
        <br>
        <label for="">Status Bayar</label>
        <input type="text" name="status_bayar" value="{{ $transaksi->status_bayar }}">
        <br>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
</head>
<body>
    <h1 align="center">Data Transaksi</h1>
    <a href="{{ route('order') }}">Tambah</a>
    
    <table align="center" border="1px">
        <thead>
            <tr>
                <th>No</th>
                <th>Waktu</th>
                <th>Nama Kasir</th>
                <th>Status Transaksi</th>
                <th>Status Order</th>
                <th>Status Bayar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksi as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->nama_kasir }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->status_order }}</td>
                <td>{{ $item->status_bayar }}</td>
                <td>
                    <a href="{{ route('fix', ['id' => $item->id_transaksi]) }}">Edit</a>
                    <form action="{{ route('delete', ['id' => $item->id_transaksi]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah kamu yakin ingin menghapus transaksi ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
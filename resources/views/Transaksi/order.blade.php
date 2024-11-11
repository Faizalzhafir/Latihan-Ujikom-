<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
</head>
<body>
    <h1 align="center">Transaksi Order</h1>
    <h3 align="center">Input Transaksi Order</h3>

    <form align="left" action="#">

        <label for="nama_pakaian">Jenis Pakaian</label>
        <form method="GET">
            <select name="id_pakaian" id="id_pakaian">
                <option value="">--{{ isset($p_detail) ? $p_detail->nama_pakaian : 'Nama Pakaian' }}--</option>
                @foreach ($pakaian as $item)
                    <option value="{{ $item->id_pakaian }}">{{ $item->id_pakaian . ' ' . '-'. ' ' .$item->nama_pakaian }}</option>
                @endforeach
            </select>
            <label for="nama_layanan">Jenis Layanan</label>
            <select name="id_layanan" id="id_layanan">
                <option value="">--Pilih Layanan--</option>
                @foreach ($layanan as $item)
                <option value="{{ $item->id_layanan }}">{{ $item->id_layanan .' '.'-'.' '. $item->nama_layanan }}</option>
                @endforeach
            </select>
            <label for="nama_pembayaran">Jenis Pembayaran</label>
            <select name="id_pembayaran" id="id_pembayaran">
                <option value="">--Pilih Pembayaran--</option>
                @foreach ($pembayaran as $item)
                <option value="{{ $item->id_pembayaran }}">{{ $item->id_pembayaran .' ' .'-'.' '. $item->nama_pembayaran }}</option>
                @endforeach
            </select>
            <button type="submit" style="display:inline;">Pilih</button>
            <!-- <button type="submit" style="display:inline;">Pilih</button> -->
        </form>
        <br>
        <form action="{{ route('create') }}" method="POST">
            @csrf

            <input type="hidden" name="id_transaksi" value="{{ Request::segment(2) }}">
            <input type="hidden" name="id_pakaian" value="{{ isset($p_detail) ? $p_detail->id_pakaian : '' }}">
            <input type="hidden" name="id_layanan" value="{{ isset($l_detail) ? $l_detail->id_layanan : '' }}">
            <input type="hidden" name="id_pembayaran" value="{{ isset($b_detail) ? $b_detail->id_pembayaran : '' }}">
            <input type="hidden" name="nama_pakaian" value="{{ isset($p_detail) ?  $p_detail->nama_pakaian : '' }}">
            <input type="hidden" name="nama_layanan" value="{{ isset($l_detail) ?  $l_detail->nama_layanan : '' }}">
            <input type="hidden" name="nama_pembayaran" value="{{ isset($b_detail) ? $b_detail->nama_pembayaran : ''}}">
            <input type="hidden" name="subtotal" value="{{ $subtotal }}">

            <label for="">Nama: </label>
            <input type="text" name="nama_pakaian" value="{{ isset($p_detail) ? $p_detail->nama_pakaian : '' }}" disabled>
            <br>
            <br>
            <label for="">Harga: </label>
            <input type="number" name="harga" value="{{ isset($p_detail) ? $p_detail->harga : '' }}" disabled>
            <br>
            <br>
            <label for="">Jumlah</label>
            <input type="number" value="{{ $jumlah }}" id="jumlah" name="jumlah" > <a href="?id_pakaian={{ request('id_pakaian') }}&id_layanan={{ request('id_layanan') }}&id_pembayaran={{ request('id_pembayaran') }}&act=min&jumlah={{ $jumlah }}" style="display:inline;" >Kurang</a> <a href="?id_pakaian={{ request('id_pakaian') }}&id_layanan={{ request('id_layanan') }}&id_pembayaran={{ request('id_pembayaran') }}&act=plus&jumlah={{ $jumlah }}" style="display:inline;" >Tambah</a>
            <br>
            <br>

            <label for="">Subtotal: </label>
            <input type="number" name="subtotal" value="{{ format_rupiah($subtotal) }}" disabled>
            <br>
            <br>
            <label for="">Layanan: </label>
            <input type="text" name="nama_layanan" value="{{ isset($l_detail) ? $l_detail->nama_layanan : '' }}" disabled>
            <br>
            <br>
            <label for="">Pembayaran: </label>
            <input type="text" name="nama_pembayaran" value="{{ isset($b_detail) ? $b_detail->nama_pembayaran : '' }}" disabled>
            <br>
            <br>
            <button type="submit" style="display:inline;" >Kembali</button> <button type="submit" style="display:inline;">Tambah</button>
            <br>
            <br>
        </form>
        <!-- <label for="nama_pembayaran">Jenis Pembayaran</label>
        <select name="id_pembayaran" id="id_pembayaran">
            <option value="">--Pilih Pembayaran--</option>
            @foreach ($pembayaran as $item)
                <option value="{{ $item->id_pembayaran }}">{{ $item->nama_pembayaran }}</option>
            @endforeach
        </select>
        <br>
        <br>
        <label for="nama_konsumen">Nama Konsumen</label>
       <select name="id_konsumen" id="id_konsumen">
        <option value="">--Pilih Konsumen--</option>
        @foreach ($konsumen as $item)
            <option value="{{ $item->id_konsumen }}">{{ $item->nama }}</option>
        @endforeach
       </select>
       <br>
       <br> -->
        <!-- <button type="submit">Simpan</button> -->
    </form>
    <table border="1px" align="center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kuantitas</th>
                <th>Subtotal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksi_detail as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_pakaian }}</td>
                <td align="center">{{ $item->jumlah }}</td>
                <td>{{ 'Rp' . format_rupiah( $item->subtotal) }}</td>
                <td>
                    <a href="/transaksi/detail/delete?id={{ $item->id_detail }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <form action="" align="center">
        <a href="/transaksi/detail/selesai/{{ Request::segment(2) }}" >Selesai</a> <a href="/transaksi/detail/selesai" >Pending</a>
    <!-- </form>
        <form action="" align="right" method="GET">
            <label for="nama_layanan">Jenis Layanan</label>
            <select name="id_layanan" id="id_layanan">
                <option value="">--Pilih Layanan--</option>
                @foreach ($layanan as $item)
                    <option value="{{ $item->id_layanan }}">{{ $item->id_layanan .' '.'-'.' '. $item->nama_layanan }}</option>
                @endforeach
            </select>
            <button type="submit" style="display:inline;">Pilih</button>
            <br>
            <br>
        </form>
        <form align="right" action="{{ route('create') }}" method="POST">

            <input type="hidden" name="id_layanan" value="{{ isset($l_detail) ? $l_detail->id_layanan : '' }}">
            <input type="hidden" name="nama_layanan" value="{{ isset($l_detail) ?  $l_detail->nama_layanan : '' }}">
            
            <label for="">Nama: </label>
            <input type="text" name="nama_layanan" value="{{ isset($l_detail) ? $l_detail->nama_layanan : '' }}" disabled>
            <br>
            <br>
            <label for="">Harga: </label>
            <input type="number" name="harga" value="{{ isset($l_detail) ? $l_detail->harga : '' }}" disabled>
            <br>
            <br> -->
        </form>
    <form action="" align="right" method="GET">
        <label for="">Total Harga: </label>
        <input type="number" value="{{ format_rupiah($transaksi->total) }}" name="total" disabled>
        <br>
        <br>
        <label for="">Diterima: </label>
        <input type="number" value="{{ request('diterima') }}" name="diterima">
        <br>
        <br>
        <button type="submit">Hitung</button>
        <br>
        <br>
    </form>
    <form action="" align="right">
        <label for="">Kembalian: </label>
        <input type="number" value="{{ format_rupiah($kembali) }}" name="total_harga" disabled>
        <br>
        <br>
    </form>
</body>
</html>
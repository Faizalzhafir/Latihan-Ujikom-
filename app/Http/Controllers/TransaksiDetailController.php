<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiDetail;
use App\Models\Transaksi;


class TransaksiDetailController extends Controller
{
    function create(Request $request) {
        // die('masuk');
        // dd($request->all());

        $id_pakaian = $request->id_pakaian;
        $id_layanan = $request->id_layanan;
        $id_pembayaran = $request->id_pembayaran;
        $id_transaksi = $request->id_transaksi;

        $td = TransaksiDetail::whereIdPakaian($id_pakaian)->whereIdTransaksi($id_transaksi)->whereIdLayanan($id_layanan)->whereIdPembayaran($id_pembayaran)->first();
        $transaksi = Transaksi::find($id_transaksi);

        if ($td == null) {
            
            $data = [
                'id_pakaian' => $id_pakaian,
                'id_layanan' => $id_layanan,
                'id_pembayaran' => $id_pembayaran,
                'nama_pakaian'=> $request->nama_pakaian,
                'nama_layanan'=> $request->nama_layanan,
                'nama_pembayaran'=> $request->nama_pembayaran,
                'id_transaksi' => $id_transaksi,
                'jumlah' => $request->jumlah,
                'subtotal' => $request->subtotal
            ];
            TransaksiDetail::create($data);

            $dt = [
                'total' => $request->subtotal + $transaksi->total
            ];
            $transaksi->update($dt);
        } else {
            $data = [
                'jumlah' => $request->jumlah + $td->jumlah,
                'subtotal' => $request->subtotal + $td->subtotal
            ];
            $td->update($data);

            
            $dt = [
                'total' => $request->subtotal + $transaksi->total
            ];
            $transaksi->update($dt);
        }


        return redirect('/edit/'. $id_transaksi);
    }

    public function delete() {
        $id = request('id');
        $td = TransaksiDetail::find($id);

        $transaksi = Transaksi::find($td->id_transaksi);
        $data = [
            'total' => $transaksi->total - $td->subtotal,
        ];
        $transaksi->update($data);

        $td->delete();
        return redirect()->back();

    }

    public function done($id){
        $transaksi = Transaksi::find($id);
        $data = [
            'status' => 'selesai',
        ];
        $transaksi->update($data);
        return redirect()->route('index');
    }
}

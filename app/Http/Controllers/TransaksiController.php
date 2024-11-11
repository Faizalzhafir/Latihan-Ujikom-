<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Pembayaran;
use App\Models\Pakaian;
use App\Models\Transaksi;
use App\Models\TransaksiDetail;
use App\Models\Konsumen;

class TransaksiController extends Controller
{
    public function index() {
        $transaksi = Transaksi::orderBy('created_at','desc')->get();

        return view('Transaksi.index', compact('transaksi'));
    }

    public function fix(Request $request,$id) {
        $transaksi = Transaksi::find($id);

        return view('Transaksi.edit', compact('transaksi'));
    }

    public function update(Request $request,$id) {
        // dd($request->all());
        $transaksi = Transaksi::find($id);

        $data = [
            'status' => $request->status,
            'status_order' => $request->status_order,
            'status_bayar' => $request->status_bayar
        ];

        $transaksi->update($data);

        return redirect()->route('index');
    }

    public function delete($id) {
        $transaksi = Transaksi::find($id);

        if ($transaksi) {
            $transaksi->delete();
        }

        return redirect()->route('index');
    }

    public function order() {
       
        $data = [
            'id_user' => auth()->user()->id,
            'nama_kasir' => auth()->user()->name,
            'total' => 0
        ];

        $transaksi = Transaksi::create($data);

        return redirect('/edit/'. $transaksi->id_transaksi);
    }

    public function edit($id) {
        $konsumen = Konsumen::get();

        $pembayaran = Pembayaran::get();
        $id_pembayaran = request('id_pembayaran');
        $b_detail = Pembayaran::find($id_pembayaran);

        $layanan =  Layanan::get();
        $id_layanan = request('id_layanan');
        $l_detail = Layanan::find($id_layanan);

        $pakaian =  Pakaian::get();
        $id_pakaian = request('id_pakaian');
        $p_detail = Pakaian::find($id_pakaian);

        $transaksi_detail = TransaksiDetail::whereIdTransaksi($id)->get();
        $transaksi = Transaksi::find($id);

        $diterima = request('diterima');
        $kembali = $diterima - $transaksi->total;

        $act = request('act');
        $jumlah = request('jumlah');
        if ($act == 'min') {
            if ($jumlah <= 1) {
                $jumlah = 1;
            } else {
                $jumlah = $jumlah - 1;
            }
        } else {
            $jumlah = $jumlah + 1;
        }

        $subtotal = 0;
        if ($p_detail) {
            $subtotal = $jumlah * $p_detail->harga;
            // if ($l_detail) {
            //     $subtotal = $jumlah *  $p_detail->harga + $l_detail->harga;
            // }
        }

        $data = [
            'layanan' => $layanan,
            'pembayaran' => $pembayaran,
            'konsumen' => $konsumen,
            'pakaian' => $pakaian,
            'p_detail' => $p_detail,
            'layanan' => $layanan,
            'l_detail' => $l_detail,
            'pembayaran' => $pembayaran,
            'b_detail' => $b_detail,
            'subtotal' => $subtotal,
            'transaksi' => $transaksi,
            'kembali' => $kembali,
            'transaksi_detail' => $transaksi_detail,
            'jumlah' => $jumlah
        ];

        return view('Transaksi.order', $data );
    }
    // public function store(Request $request) {
    //     // dd($request->all());
    //     // $pakaian = Pakaian::where('nama_pakaian', $request->nama_pakaian)->firstOrFail();
    //     // $layanan = Layanan::where('nama_layanan', $request->nama_layanan)->firstOrFail();
    //     // $pembayaran = Pembayaran::where('nama_pembayaran', $request->nama_pembayaran)->firstOrFail();

    //     // $request->validate([
    //     //     'id_pakaian' => 'required',
    //     //     'id_layanan' => 'required',
    //     //     'id_pembayaran' => 'required',
    //     //     'id_konsumen' => 'required'
    //     // ]);


    //     // $data = [
    //     //     'id_pakaian' => $request->id_pakaian,
    //     //     'id_layanan' => $request->id_layanan,
    //     //     'id_pembayaran' => $request->id_pembayaran,
    //     //     'id_konsumen' => $request->id_konsumen,
    //     //     'harga' => $request->harga,
    //     //     'jumlah' => $request->jumlah,
    //     //     'subtotal' => $request->subtotal
    //     // ];

    //     // Transaksi::create($data);

    //     // return redirect()->route('order');
    // }
}

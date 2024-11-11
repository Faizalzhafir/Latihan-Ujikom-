<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    public function index() {
        $pembayaran = Pembayaran::get();
        return view('Pembayaran.index',compact('pembayaran'));
    }

    public function create() {
        return view('Pembayaran.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama_pembayaran' => 'required|string'
        ]);

        $data['nama_pembayaran'] = $request->nama_pembayaran;

        Pembayaran::create($data);

        return redirect()->route('pembayaran.index');
    }

    public function edit(Request $request,$id) {
        $pembayaran = Pembayaran::find($id);

        return view('Pembayaran.edit', compact('pembayaran'));
    }

    public function update(Request $request,$id) {
        $pembayaran = Pembayaran::find($id);

        $request->validate([
            'nama_pembayaran' => 'required|string'
        ]);

        $data['nama_pembayaran'] = $request->nama_pembayaran;

        $pembayaran->update($data);

        return redirect()->route('pembayaran.index');

    }

    public function delete($id) {
        $pembayaran = Pembayaran::find($id);

        if($pembayaran) {
            $pembayaran->delete();
        }

        return redirect()->route('pembayaran.index');
    }
}

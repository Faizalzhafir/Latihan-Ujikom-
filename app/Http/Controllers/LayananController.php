<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    public function index() {
        $layanan = Layanan::get();

        return view('Layanan.index', compact('layanan'));
    }

    public function create() {
        return view('Layanan.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama_layanan' => 'required|string',
            'harga' => 'required'
        ]);
        
        $data['nama_layanan'] = $request->nama_layanan;
        $data['harga'] = $request->harga;
        
        Layanan::create($data);
        
        return redirect()->route('layanan.index');
    }

    public function edit(Request $request,$id) {
        $layanan = Layanan::find($id);

        return view('Layanan.edit', compact('layanan'));
    }

   public function update(Request $request,$id) {

    $layanan = Layanan::find($id);

    $request->validate([
        'nama_layanan' => 'required|string',
        'harga' => 'required'
    ]);

    $data['nama_layanan'] = $request->nama_layanan;
    $data['harga'] = $request->harga;

    $layanan->update($data);

    return redirect()->route('layanan.index');

   }

   public function delete($id) {
    $layanan = Layanan::find($id);
    
    if($layanan) {
        $layanan->delete();
    }

    return redirect()->route('layanan.index');
   }
}

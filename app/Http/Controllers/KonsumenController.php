<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsumen;

class KonsumenController extends Controller
{
    public function index() {
        $konsumen = Konsumen::get();

        return view('Konsumen.index', compact('konsumen'));
    }

    public function create() {
        return view('Konsumen.create');
    } 

    public function store(Request $request) {
        // dd($request->all());
        $request->validate([
            'nama' => 'required|string',
            'telepon' => 'required',
            'alamat' => 'required|string|max:255'
        ]);

        $data = [
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat
        ];

        Konsumen::create($data);

        return redirect()->route('konsumen.index');
    }

    public function edit(Request $request,$id) {
        $konsumen = Konsumen::find($id);

        return view('Konsumen.edit', compact('konsumen'));
    }

    public function update(Request $request, $id) {
        $konsumen = Konsumen::find($id);

        
        $request->validate([
            'nama'=> 'required',
            'telepon' => 'required',
            'alamat' => 'required'
        ]);

        $data = [
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat
        ];

        $konsumen->update($data);

        return redirect()->route('konsumen.index');
    }

    public function delete($id) {
        $konsumen = Konsumen::find($id);

        if ($konsumen) {
            $konsumen->delete();
        }

        return redirect()->route('konsumen.index');
    }
}

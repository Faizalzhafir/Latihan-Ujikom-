<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pakaian;

class PakaianController extends Controller
{
    public function index(Request $request) {
        
        $data = new Pakaian;
        if ($request->get('search')){
            $data = $data->where('nama_pakaian','LIKE','%'.$request->get('search').'%')
            ->orWhere('harga','LIKE','%'.$request->get('search').'%'); //code yang digunakan untuk,jika ada user yang memakai filter search,maka data akan ditambahkan,dimana menggunakan 'nama' seperti apa yang direquestkan atau diinputkan di filternya
        }

        $data = $data->get(); //untuk mengeksekusi git datanya
        // $pakaian = Pakaian::get();

        return view('Pakaian.index', compact('data','request'));
    }

    public function create() {
        return view('Pakaian.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama_pakaian' => 'required|string',
            'harga'        => 'required|integer'
        ]);
        
        $data = [
            'nama_pakaian' => $request->nama_pakaian,
            'harga'        =>  $request->harga
        ];
        
        Pakaian::create($data);
        
        return redirect()->route('pakaian.index');
    }

    public function edit(Request $request,$id) {
        $pakaian = Pakaian::find($id);

        return view('Pakaian.edit', compact('pakaian'));
    }

   public function update(Request $request,$id) {

    $pakaian = Pakaian::find($id);

    $request->validate([
        'nama_pakaian' => 'required|string',
        'harga'        => 'required|integer'
    ]);

    $data = [
        'nama_pakaian' => $request->nama_pakaian,
        'harga'        =>  $request->harga
    ];

    $pakaian->update($data);

    return redirect()->route('pakaian.index');

   }

   public function delete($id) {
    $pakaian = Pakaian::find($id);
    
    if($pakaian) {
        $pakaian->delete();
    }

    return redirect()->route('pakaian.index');
   }
}

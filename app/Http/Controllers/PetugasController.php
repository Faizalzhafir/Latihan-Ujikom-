<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PetugasController extends Controller
{

    public function index() {
        if (auth()->user()->role == 'Admin') {
            $user = User::get();
        } else {
            $user = User::isNotAdmin()->onlyAdmin()->get();
        }

        return view('Petugas.index', compact('user'));
    }

    public function create() {
        return view('Petugas.create');
    }

    public function store(Request $request) {

       $request->validate([
           'name'       => 'required|string',
           'email'      => 'required|unique:users,email',
           'password'   => 'required',
       ]);
       
       $data = [
           'name'       => $request->name,
           'email'      => $request->email,
           'password'   => Hash::make($request->password),
           'role'       => 'Petugas'
       ];
       
       User::create($data);
       
       return redirect()->route('petugas.index');
   }

   public function edit($id) {
    $user = User::find($id);

    return view('Petugas.edit', compact('user'));
   }

   public function update(Request $request, $id) {
    $user = User::find($id);

    // $request->validate([
    //     'name' => 'nullable',
    //     'email' => 'nullable',
    //     'password' => 'nullable'
    // ]);

    // $data = [
    //     'name' => $request->name,
    //     'email' => $request->email,
    //     'password' => if ($request->has('password') && $request->password != "") {
    //         $user->password = Hash::make($request->passwor);
    //     }
    // ];
    
    $user->name = $request->name;
    $user->email = $request->email;
    if ($request->has('password') && $request->password != "") {
        $user->password = Hash::make($request->password);
    }
    $user->update();

    return redirect()->route('petugas.index')->with('sucess','User berhasil diedit!');

   }

   public function delete($id) {
    $user = User::find($id);

    if($user) {
        $user->delete();
    }

    return redirect()->route('petugas.index');

   }
}

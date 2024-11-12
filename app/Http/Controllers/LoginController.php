<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login_proses(Request $request) {
        $request->validate([
            'email'    => 'required',
            'password' => 'required'
        ]);

        $data = [
            'email'    => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($data)) {
            return view('dashboard');
        } else {
            return redirect()->route('login');
        }

    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }

    public function register() {
        return view('auth.register');
    }

    public function register_proses(Request $request) {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role'     => 'required'
        ]);

        $data = [
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => $request->role
        ];

        User::create($data);

        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($login)) {
            return view('about');
        } else {
            return redirect()->route('login')->withErrors([
                'login' => 'Email atau password salah.',
            ])->withInput();
        }
    }

   public function dashboard() {
    return view('dashboard');
   }

    public function transaksi(){
        return view('transaksi_order');
    }

}

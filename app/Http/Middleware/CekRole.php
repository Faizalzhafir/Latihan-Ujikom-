<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        //kondisi jika proses auth dan variabel role sama dengan,role nya berdasrkan akses di route,maka tampilkan sesuai aksesnya
        if(auth()->user() && $role == auth()->user()->role) {
            return $next($request);
        }

        // Jika pengguna memiliki role 'Admin', izinkan akses tanpa pengecekan lebih lanjut
        if ($request->user()->role === 'Admin') {
            return $next($request);
        }

        // // Jika bukan Admin, cek apakah role pengguna termasuk dalam daftar role yang diizinkan
        // if (in_array($request->user()->role, $role)) {
        //     return $next($request);
        // }


        return redirect('about');
    }
}

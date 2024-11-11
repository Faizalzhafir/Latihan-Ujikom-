<?php

namespace Database\Seeders;

use App\Models\User; //panggil model yang akan di seeder
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; //gunakan namespace untuk mengonversi password menjadi bycrpyt

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Buat pengisian untuk data awal degan memanggil Model User
        User::create([
            'name' => 'Argani',
            'email' => 'argani@gmail.com',
            'password' => Hash::make('gggggg'), //karena ini password maka harus terenskripsi,Laravel nantinya akan mengenskripsi password-nya seseuai dengan bawaan si Laravelnya,[php artisan db:seed --class=UserSeeder] membuat perintah ke laravel untuk menjalankan seeder namanya
            'role' => 'Admin',
        ]); 
    }
}

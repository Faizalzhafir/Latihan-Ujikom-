<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pakaian extends Model
{
    use HasFactory;

    protected $table = 'jenis_pakaian';
    protected $primaryKey = 'id_pakaian';
    protected $guarded = []; 
}

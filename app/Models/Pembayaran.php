<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'jenis_pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $guarded = [];
}

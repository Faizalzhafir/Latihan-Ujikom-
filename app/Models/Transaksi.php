<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    
    protected $table = 'transaksi_order';
    protected $primaryKey = 'id_transaksi';
    protected $guarded = [];

    // public function konsumen() {
    //     return $this->belongsTo(Konsumen::class, 'id_konsumen');
    // }
}

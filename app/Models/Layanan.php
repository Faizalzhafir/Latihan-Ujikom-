<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'jenis_layanan';
    protected $primaryKey = 'id_layanan';
    protected $guarded = [];
}

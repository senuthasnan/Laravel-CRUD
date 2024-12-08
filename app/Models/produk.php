<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{

    public $timestamps = false;
    
    protected $fillable = [
        'nama_produk',  'keterangan', 'harga','jumlah'
    ];

    protected  $table = "produk";
}

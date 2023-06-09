<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barang";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'nama_barang',
         'harga_satuan', 
         'jml', 
         'tgl_drop'
    ];
}

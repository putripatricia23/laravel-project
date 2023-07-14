<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';
    public $timestamps = false;

    protected $fillable = [
        'tanggal',
        'nama',
        'jumlah',
        'produk_id',
    ];
        public function produk(){
        return $this->belongsTo(Produk::class,'produk_id');
        }
}

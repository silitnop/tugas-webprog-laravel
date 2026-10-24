<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = ['nama' ,'harga','kategori_id'];

    public function kategori(){
        return $this-> belongsto(Kategori::class);
    }

    public function pesanan()
    {
        return $this->belongsToMany(Pesanan::class, 'pesanan_produk')->withPivot('jumlah');
    }
}

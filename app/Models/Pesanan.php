<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pesanan extends Model
{
    use HasFactory;
    protected $fillable = ['kode_pesanan', 'tanggal_pesanan'];

    public function produks()
    {
        return $this->belongsToMany(Produk::class)->withPivot('jumlah')->withTimestamps();
    }
}

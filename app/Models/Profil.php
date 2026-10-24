<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Profil extends Model
{
    use HasFactory;
    protected $fillable = ['pelanggan_id','no_hp'];

    public function pelanggan(){
        return $this->belongsto(Pelanggan::class);
    }
}

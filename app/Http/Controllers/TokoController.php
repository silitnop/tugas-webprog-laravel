<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Kategori;
use App\Models\Pesanan;

class TokoController extends Controller
{
    public function oneToOne()
    {
        $pelanggans = Pelanggan::with('profil')->paginate(10);
        return view('one-to-one', compact('pelanggans'));
    }

    public function oneToMany()
    {
        $kategoris = Kategori::with('produks')->get();
        return view('one-to-many', compact('kategoris'));
    }

    public function manyToMany()
    {
        $pesanans = Pesanan::with('produks')->get();
        return view('many-to-many', compact('pesanans'));
    }

    public function artikel()
    {
        return view('artikel');
    }
}
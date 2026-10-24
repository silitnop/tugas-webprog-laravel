<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelanggan;
use App\Models\Profil;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Pesanan;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggan::factory(30)->has(Profil::factory())->create();
        
        Kategori::factory(5)->has(Produk::factory(6))->create();
        
        $produkIds = Produk::pluck('id');

         Pesanan::factory(20)->create()->each(function ($pesanan) use ($produkIds) {
            $data = [];
            foreach ($produkIds->random(rand(1, 4)) as $id) {
                $data[$id] = ['jumlah' => rand(1, 5)];
            }
            $pesanan->produks()->attach($data);
        });
    }
}

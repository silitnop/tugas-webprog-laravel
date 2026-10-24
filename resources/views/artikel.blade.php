@extends('layouts.app')
@section('title', 'Artikel')
@section('content')
<article>
    <h2>Memahami Relasi Database pada Toko Online dengan Laravel</h2>

    <p>Toko online menyimpan banyak jenis data: pelanggan, produk, kategori, dan pesanan. Data-data ini saling berhubungan, dan Laravel mengelolanya lewat relasi Eloquent sehingga kita tidak perlu menulis query JOIN manual.</p>

    <h4>One to One: Pelanggan dan Profil</h4>
    <p>Satu pelanggan hanya punya satu profil, dan satu profil hanya milik satu pelanggan. Kolom <code>pelanggan_id</code> pada tabel profil dibuat unik agar aturan ini terjaga.</p>

    <h4>One to Many: Kategori dan Produk</h4>
    <p>Satu kategori memiliki banyak produk, tetapi setiap produk hanya masuk ke satu kategori. Foreign key <code>kategori_id</code> berada di tabel produk.</p>

    <h4>Many to Many: Pesanan dan Produk</h4>
    <p>Satu pesanan dapat berisi banyak produk, dan satu produk dapat dibeli di banyak pesanan. Hubungan ini memerlukan tabel pivot <code>pesanan_produk</code>, yang juga menyimpan jumlah barang yang dibeli.</p>

    <h4>Kesimpulan</h4>
    <p>Memilih jenis relasi yang tepat membuat struktur database rapi, data tidak duplikat, dan kode lebih mudah dibaca. Dengan <code>hasOne</code>, <code>hasMany</code>, dan <code>belongsToMany</code>, pengambilan data terkait cukup ditulis dalam satu baris.</p>
</article>
@endsection
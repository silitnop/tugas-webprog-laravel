@extends('layouts.app')
@section('title', 'One to Many')
@section('content')
<h3>One to Many: Kategori dan Produk</h3>
@foreach($kategoris as $k)
<div class="card mb-3">
    <div class="card-header fw-bold">{{ $k->nama }} ({{ $k->produks->count() }} produk)</div>
    <ul class="list-group list-group-flush">
        @foreach($k->produks as $p)
        <li class="list-group-item d-flex justify-content-between">
            {{ $p->nama }}
            <span>Rp {{ number_format($p->harga, 0, ',', '.') }}</span>
        </li>
        @endforeach
    </ul>
</div>
@endforeach
@endsection
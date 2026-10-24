@extends('layouts.app')
@section('title', 'Many to Many')
@section('content')
<h3>Many to Many: Pesanan dan Produk</h3>
@foreach($pesanans as $ps)
<div class="card mb-3">
    <div class="card-header"><b>{{ $ps->kode_pesanan }}</b> - {{ $ps->tanggal }}</div>
    <table class="table mb-0">
        <tr><th>Produk</th><th>Harga</th><th>Jumlah</th><th>Subtotal</th></tr>
        @php $total = 0; @endphp
        @foreach($ps->produks as $pr)
            @php $sub = $pr->harga * $pr->pivot->jumlah; $total += $sub; @endphp
            <tr>
                <td>{{ $pr->nama }}</td>
                <td>Rp {{ number_format($pr->harga, 0, ',', '.') }}</td>
                <td>{{ $pr->pivot->jumlah }}</td>
                <td>Rp {{ number_format($sub, 0, ',', '.') }}</td>
            </tr>
        @endforeach
        <tr class="table-light">
            <td colspan="3" class="text-end fw-bold">Total</td>
            <td class="fw-bold">Rp {{ number_format($total, 0, ',', '.') }}</td>
        </tr>
    </table>
</div>
@endforeach
@endsection
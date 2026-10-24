@extends('layouts.app')
@section('title', 'One to One')
@section('content')
<h3>One to One: Pelanggan dan Profil</h3>
<table class="table table-bordered">
    <tr><th>Nama</th><th>Email</th><th>No HP</th></tr>
    @foreach($pelanggans as $p)
    <tr>
        <td>{{ $p->nama }}</td>
        <td>{{ $p->email }}</td>
        <td>{{ $p->profil->no_hp }}</td>
    </tr>
    @endforeach
</table>
{{ $pelanggans->links('pagination::bootstrap-5') }}
@endsection
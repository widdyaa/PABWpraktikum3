@extends('layouts.app')

@section('content')

<h2>Form Pelaporan Banjir</h2>

<form action="{{ route('konfirmasi') }}" method="POST">

    @csrf

    <label>Nama Pelapor</label>
    <input type="text" name="nama" placeholder="Masukkan nama pelapor" required>

    <label>Lokasi Kejadian (Kecamatan/Desa)</label>
    <input type="text" name="lokasi" placeholder="Masukkan lokasi kejadian" required>

    <label>Tinggi Genangan Air (cm)</label>
    <input type="number" name="tinggi" placeholder="Contoh : 50" required>

    <button type="submit">Kirim Laporan</button>

</form>

@endsection
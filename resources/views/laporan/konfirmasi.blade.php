@extends('layouts.app')

@section('content')

<x-alert>
    Laporan berhasil dikirim.
</x-alert>

<div class="card">

    <h3>Data Laporan</h3>

    <p><b>Nama Pelapor :</b> {{ $data['nama'] }}</p>

    <p><b>Lokasi :</b> {{ $data['lokasi'] }}</p>

    <p><b>Tinggi Genangan :</b> {{ $data['tinggi'] }} cm</p>

</div>

@endsection
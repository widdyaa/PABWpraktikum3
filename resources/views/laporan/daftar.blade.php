@extends('layouts.app')

@section('content')

<h2>Daftar Laporan Banjir</h2>

@foreach($laporan as $item)

    @include('partials.laporan-card')

@endforeach

@endsection
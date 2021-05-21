@extends('layouts.backend.main')

@section('content')
<h1 class="mt-5">Detail layanan</h1>
Nama Layanan : {{$layanan->nama_layanan}} <br>
Deskripsi Layanan :{{$layanan->deskripsi_layanan}} <br>

@endsection
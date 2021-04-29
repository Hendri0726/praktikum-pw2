@extends('layouts.backend.main')
@section('content')


<h1 class="mt-4">Nama Ketua Jurusan <?= $kajur ?></h1>

<?php echo $nama_prodi ?>
<p>Waktu Saat ini: {{time()}}</p>
@if (5 < 10) <h2>Kondisi benar</h2>
  @endif
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla sed deleniti sequi suscipit doloremque quae, dolorum, corporis obcaecati laborum ab necessitatibus in velit neque fuga inventore magni eum, facere reprehenderit?</p>
  <p>Nama Universitas : {{ $universitas }}</p>

  @endsection
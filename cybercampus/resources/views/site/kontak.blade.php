@extends('layouts.backend.main')
@section('content')

<h1 class="mt-4">Kontak Kami</h1>
<form action="">
  <div class="form-group">
    <label for="nama">Nama</label>
    <input class="form-control" type="text" id="nama" name="nama">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input class="form-control" type="text" name="email" id="email">
  </div>
  <div class="form-group">
    <label for="Tanggapan">Tanggapan</label>
    <textarea class="form-control" input width=300px type='text' name="Tanggapan" id="Tanggapan"></textarea>
  </div>

  <input class="btn btn-primary" type="button" name="kirim" value="kirim">
</form>


@endsection
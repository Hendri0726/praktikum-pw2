@extends('layouts.backend.main')
@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">index layanan!</h1>
  <div class="row">
    <div class="col-lg-12">
      <!-- Dropdown Card Example -->
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->

        <!-- Card Body -->
        <div class="card-body">
          <a href="{{route('layanan.tambahback')}}" class="btn btn-primary">Tambah layanan</a>
          <ul>
            @foreach($layanan as $lyn)
            <li>
              {{$lyn->nama_layanan}}
              <a href="{{route('layanan.detailBack',['id'=>$lyn->id])}}">Detail</a>
              <a href="{{route('layanan.ubahform',['id'=>$lyn->id])}}">Ubah</a>
              <a href="{{route('layanan.hapus',['id'=>$lyn->id])}}">Hapus</a>
            </li>
            @endforeach
          </ul>
          Ini merupakan halaman latihan untuk praktikum pemrograman web 2. Lorem ipsum, dolor
          sit amet consectetur adipisicing elit. Qui eaque quis eius nisi, voluptatem, vero
          maxime iure harum quasi repellat fuga provident doloremque est minima at delectus
          nesciunt sit libero.
        </div>
      </div>



    </div>
  </div>
</div>



@endsection
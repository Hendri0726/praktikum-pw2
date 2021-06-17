@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800">Dasboard Dosen</h1>
  <div class="row">
    <div class="col-lg-12">
      <!-- Dropdown Card Example -->
      <div class="card shadow mb-4">
        <div class="card-header">
          Daftar Mahasiswa

        </div>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>id</th>
                <th>nim</th>
                <th>nama</th>
                <th>Alamat</th>
              </tr>
            </thead>
            <tbody>
              @foreach($mahasiswa as $mhs)
              <tr>
                <td>{{$mhs->id}}</td>
                <td>{{$mhs->nim}}</td>
                <td>{{$mhs->nama}}</td>
                <td>{{$mhs->alamat}}</td>
                <td>
                  <a href="{{route('admin.berita.detail',['id'=>$brt->id])}}" class="btn btn-sm btn-info">Detail</a>
                  <a href="{{route('admin.berita.hapus',['id'=>$brt->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus?');">Hapus</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $mahasiswa->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
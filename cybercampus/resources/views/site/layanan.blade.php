@extends('layouts.backend.main')
@section('content')

<h1 class="mt-4">Layanan</h1>
<p>layanan program studi sistem informasi meliputi :</p>
<ul>
  @foreach($list_layanan as $ls)
  <li>{{$ls}}</li>
  @endforeach

</ul>
@endsection
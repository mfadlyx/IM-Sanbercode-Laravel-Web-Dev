@extends('layout.master')
@section('judul')
Halaman Detail Cast
@endsection
@section('content')

<h1>{{$cast->nama}}</h1>
<h4>Umur : {{$cast->umur}}</h4>
<p>{{$cast->bio}}</p>

<a href="/cast" class="btn btn-primary btn-sm my-4">Kembali</a>
@endsection
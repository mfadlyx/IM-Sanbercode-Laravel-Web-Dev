@extends('layout.master')
@section('judul')
Halaman Tampil Cast
@endsection
@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Umur</th>
        <th scope="col">Bio</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($cast as $index => $item)
        <tr>
            <th scope="row">{{$index +1}}</th>
            <td>{{$item->nama}}</td>
            <td>{{$item->umur}}</td>
            <td>
                <form action="/cast/{{$item->id}}" method="POST">
                  @csrf
                  @method('delete')
                  <a href="/cast/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                  <a href="/cast/{{$item->id}}/edit" class="btn btn-secondary btn-sm">Edit</a>
                  <input type="submit" class="btn btn-danger btn-sm" value="delete">
                </form>
            </td>
          </tr>
        @empty
            <p>Cast Kosong silahkan input cast</p>
        @endforelse
    
    </tbody>
  </table>
<a href="/cast/create" class="btn btn-primary btn-sm my-4">Tambah</a>
@endsection

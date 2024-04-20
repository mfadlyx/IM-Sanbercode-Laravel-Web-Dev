@extends('layout.master')
@section('judul')
Halaman Tambah Cast
@endsection
@section('content')
   
<form method="POST" action="/cast">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
      <label>Cast Name</label>
      <input type="text" name="nama" class="form-control">
    </div>
    <div class="form-group">
        <label>Umur Cast</label>
        <input type="number" name="umur" class="form-control">
      </div>
    <div class="form-group">
      <label>Bio Cast</label>
      <textarea name="bio" class="form-control" id="" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection

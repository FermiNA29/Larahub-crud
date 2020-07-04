@extends('adminlte.master')

@section('judul')
    <h1>Edit Pertanyaan</h1>
@endsection

@section('content')
<form action="/pertanyaan/{{$editpertanyaan->id}}" method="post">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="nama">Nama :</label>
    <input type="nama" class="form-control" name="nama" value="{{$editpertanyaan->nama}}" id="nama">
  </div>
  <div class="form-group">
    <label for="judul">Judul :</label>
    <input type="judul" class="form-control" name="judul" value="{{$editpertanyaan->judul}}" id="judul">
  </div>
  <div class="form-group">
    <label for="isi">Pertanyaann :</label>
    <input type="isi" class="form-control" name="isi" value="{{$editpertanyaan->isi}}" id="isi">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
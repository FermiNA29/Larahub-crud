@extends('adminlte.master')

@section('judul')
    <h1>Pertanyaan</h1>
@endsection

@section('content')
<form action="/pertanyaan" method="post">
@csrf
  <div class="form-group">
    <label for="nama">Nama :</label>
    <input type="nama" class="form-control" name="nama" placeholder="Enter nama" id="nama">
  </div>
  <div class="form-group">
    <label for="judul">Judul :</label>
    <input type="judul" class="form-control" name="judul" placeholder="Enter judul" id="judul">
  </div>
  <div class="form-group">
    <label for="isi">Pertanyaann :</label>
    <input type="isi" class="form-control" name="isi" placeholder="Enter Pertanyaan" id="isi">
  </div>
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
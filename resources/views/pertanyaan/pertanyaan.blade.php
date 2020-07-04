@extends('adminlte.master')

@section('judul')
  <h1>Pertanyaan</h1>
@endsection

@section('content')
@section('label')
<a href="/pertanyaan/create">
  <button type="button" class="btn btn-primary">Create Pertanyaan</button>
</a>
@endsection

<table class="table table-hover">
    <thead>
      <tr>
        <th>Judul</th>
        <th>Nama</th>
        <th>Pertanyaan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($pertanyaan as $key => $tanya)
      <tr>
        <td>{{$tanya->judul}}</td>
        <td>{{$tanya->nama}}</td>
        <td>{{$tanya->isi}}</td>
        <td>
          <a href="/jawaban/{{$tanya->id}}">
            <button type="button" class="btn btn-primary">Jawab</button>
          </a>
          <a href="/pertanyaan/{{$tanya->id}}/edit">
            <button type="button" class="btn btn-primary">Edit</button>
          </a>
          <a href="/pertanyaan/{{$tanya->id}}">
            <button type="button" class="btn btn-info">Detail</button>
          </a>
          <form action="/pertanyaan/{{$tanya->id}}" style="display:inline" method="post">
          @csrf
          @method('DELETE')
            <button type="submit" class="btn btn-danger">Hapus</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
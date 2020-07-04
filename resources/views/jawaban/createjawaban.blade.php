@extends('adminlte.master')
@section('judul')
    <h1>jawaban</h1>
@endsection

@section('name')
    <b>Penanya: </b>{{$pertanyaan->nama}}
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <p>{{$pertanyaan->isi}}</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body"><b>Komentar</b></div>

            @foreach($jawaban as $jawab)
            
            <div class="form-group ml-3 mr-3">
                <label for="judul">{{$jawab->nama}} :</label>
                <input type="judul" class="form-control" value="{{$jawab->isi}}">
            </div>
                    
                
            @endforeach

    </div>
    <div class="card">
        <div class="card-body">
            <form action="/jawaban/{{$pertanyaan->id}}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="nama" class="form-control" name="nama" placeholder="Enter nama" id="nama">
            </div>
            <div class="form-group">
                <label for="jawaban">Jawaban :</label>
                <input type="jawaban" class="form-control" name="isi" placeholder="Enter jawaban" id="jawaban">
            </div>
            <input type="hidden" name="idpertanyaan" value="{{$pertanyaan->id}}">
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    
@endsection

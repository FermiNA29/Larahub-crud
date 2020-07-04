@extends('adminlte.master')
@section('judul')
    <h1>Detail Pertanyaan</h1>
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
    
@endsection

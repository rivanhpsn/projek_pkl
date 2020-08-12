@extends('adminlte.master')

@section('content')
<div class="card">
    <div class="ml-3 mt-3">
      <h3>Detail Pelanggan</h3>
      <input hidden name="idpelanggan" value="{{$pelanggan->id}}" type="text">
      <p>Nama Pelanggan : {{$pelanggan->nama}}</p>
      <p>No. Polisi : {{$pelanggan->no_polisi}}</p>
      <p>Tipe Mobil : {{$pelanggan->model_type}}</p>
      <p>No. Telepon : {{$pelanggan->no_telp}}</p>
      <p>Status : {{$pelanggan->respon->nama}}</p>
      {{-- @foreach($pertanyaan->tags as $tag) 
        <button class="btn btn-success btn-sm mb-2"> {{$tag->nama}} </button>
      @endforeach --}}
    </div>
    <div class="ml-3 mt-3">
      {{-- <a class="btn btn-outline-success mb-3" href="#"> <i class="far fa-thumbs-up"></i></a>
      <a class="btn btn-outline-danger mb-3" href="#"> <i class="far fa-thumbs-down"></i> </a> --}}
      {{-- <a class="btn btn-outline-primary mb-3" href="/pertanyaan/komentar/create"> <i class="far fa-comments"></i></a> --}}
      
    </div>
</div>
{{-- <a href="/jawaban/{{$pertanyaan->id}}/edit" class="btn btn-primary ml-3">+ Jawaban</a> --}}
@endsection
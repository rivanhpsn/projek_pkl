@extends('adminlte.master')

@section('content')
<div class="card">
  <div class="ml-3">
    <div class="card-header">
      <h3 class="card-title">Book Pelanggan</h3>
    </div>
  <form action="/pelanggan/{{$pelanggan->id}}" method="POST">
          @csrf
          @method('PUT')
          <div class="card-body">
          <div class="form-group">
              <label for="name">Nama Pelanggan : </label>
          <input type="text" class="form-control" readonly name="nama" value="{{$pelanggan->nama}}" placeholder="Masukkan judul pertanyaan" id="nama">
          </div>
            {{-- <div class="form-group">
              <label for="description">Isi Pertanyaan : </label>
              <textarea type="text" class="form-control" name="isi"  id="isi" placeholder="Masukkan isi pertanyaan">{!!$pertanyaan->isi!!}</textarea>
            </div> --}}
            <input hidden name="updated_at" value="{{\Carbon\Carbon::now()}}">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
  </div>
</div>

<script src="{{asset('adminlte/tinymce/js/tinymce/tinymce.min.js')}}"></script>

    <script>
      tinymce.init({
        selector: '#isi'
      });
    </script>
@endsection
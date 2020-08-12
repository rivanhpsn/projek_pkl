@extends('adminlte.master')

@section('content')
  <div class="ml-3 mt-3">
    <form action="/respons" method="post">
      @csrf
      <div class="form-group">
        <label for="nama">Respon Pelanggan</label>
        <input class="form-control" type="text" name="nama" placeholder="Isi nama respon">

        <input class="btn btn-primary mt-2" type="submit" value="Create Category">
      </div>
    </form>
  </div>
@endsection
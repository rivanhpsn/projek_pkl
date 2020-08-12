@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
      <a href="/respons/create" class="btn btn-primary mb-2">Tambah respon</a>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Respon Pelanggan</th>
          </tr>
        </thead>
        <tbody>
          @foreach($respons as $key => $respon)
            <tr>
              <td> {{$key + 1}} </td>
              <td> {{ $respon->nama }} </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection
@extends('adminlte.master')

@section('content')
<div class="col-sm-6">
    <h2 class="ml-3 mt-1">Data Pelanggan</h1>
</div>    
<br>
{{-- <div class="content-wrapper"> --}}
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data pelanggan</h3>
        </div>
        <div class="card-body">
            <table id="datatable" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">No Polisi</th>
                    <th scope="col">Tipe Mobil</th>
                    <th scope="col">No. Telp</th>
                    
                </tr>
                </thead>
                <tbody>
                    @foreach ($pelanggan as $key => $pelanggan)
                        <tr id="{{$pelanggan->id}}">
                        <td> {{ $key + 1}}</td>
                        <td> {{ $pelanggan->nama}}</td>
                        <td> {{ $pelanggan->respon->nama}}</td>
                        <td>
                            {{-- <a class="btn btn-primary"  href="/jawaban/{{$pertanyaan->id}}" role="button" >Jawab</a> --}}
                            {{-- <a class="btn btn-primary"  href="/pelanggan/{{$pelanggan->id}}" role="button" >Detail</a> --}}
                            {{-- <a class="btn btn-primary"  href="/pelanggan/{{$pelanggan->id}}/edit" role="button" >Edit</a> --}}
                            <a href="/bookings/{{$pelanggan->id}}/edit" class="btn btn-success ">Hubungi</a>
                        </td>
                        <td> {{ $pelanggan->no_polisi}}</td>
                        <td> {{ $pelanggan->model_type}}</td>
                        <td> {{ $pelanggan->no_telp}}</td>
                        
                        
                        {{-- <td> {{ $pertanyaan -> like}}</td>
                        <td> {{ $pertanyaan -> dislike}}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class= "ml-3 mt-3" align="right">
                <a class="btn btn-primary"  href="/pelanggan/create" role="button" >+ Input Pelanggan</a>
                <a class="btn btn-info"  href="/bookings" role="button" >List Booking</a>
            </div>
        </div>
    </div>
</div>
{{-- </div> --}}
@endsection

@push('jsDT')
<!-- DataTables -->
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#datatable').DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });
</script>
@endpush

@push('cssDT')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

@endpush
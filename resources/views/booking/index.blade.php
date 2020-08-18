@extends('adminlte.master')

@section('content')
<div class="col-sm-6">
    <h2 class="ml-3 mt-1">List Booking</h1>
</div>    
<br>   
{{-- <div class="content-wrapper"> --}}
    <div class="container-fluid">  
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data pelanggan yang sudah dihubungi</h3>
            </div>    
            <div class="card-body">
                <table id="datatable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">MRA/SA</th>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Status</th>
                        <th scope="col">No. Telp</th>
                        <th scope="col">Penjawab</th>
                        <th scope="col">Tanggal Servis</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $key => $booking)
                            <tr id="{{$booking->id}}">
                            <td> {{ $key + 1}}</td>
                            <td> {{ $booking->user->name}}</td>
                            <td> {{ $booking->pelanggan->nama}}</td>
                            <td> {{ $booking->respon->nama}}</td>
                            <td> {{ $booking->pelanggan->no_telp}}</td>
                            <td> {{ $booking->contact_person}}</td>
                            <td> {{ $booking->tgl_servis}}</td>
                            {{-- <td>
                                <a class="btn btn-primary"  href="/jawaban/{{$pertanyaan->id}}" role="button" >Jawab</a>
                                <a class="btn btn-primary"  href="/pelanggan/{{$pelanggan->id}}" role="button" >Detail</a>
                                <a class="btn btn-primary"  href="/pelanggan/{{$pelanggan->id}}/edit" role="button" >Edit</a>
                                <a href="/bookings/{{$pelanggan->id}}/edit" class="btn btn-primary ">Hubungi</a>
                            </td> --}}
                            {{-- <td> {{ $pertanyaan -> like}}</td>
                            <td> {{ $pertanyaan -> dislike}}</td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class= "ml-3 mt-3" align="right">
                    {{-- <a class="btn btn-primary"  href="/pelanggan/create" role="button" >+ Input Pelanggan</a> --}}
                    <a class="btn btn-info"  href="/pelanggan" role="button" >Data Pelanggan</a>
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
@extends('adminlte.master')

@section('content')
{{-- <div class="content-wrapper"> --}}
    <div class="card">    
        <div class="card-body">
            <h3>Data Pelanggan</h3>
            <table id="datatable" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">No Polisi</th>
                    <th scope="col">Tipe Mobil</th>
                    <th scope="col">No. Telp</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($pelanggan as $key => $pelanggan)
                        <tr id="{{$pelanggan->id}}">
                        <td> {{ $key + 1}}</td>
                        <td> {{ $pelanggan->nama}}</td>
                        <td> {{ $pelanggan->no_polisi}}</td>
                        <td> {{ $pelanggan->model_type}}</td>
                        <td> {{ $pelanggan->no_telp}}</td>
                        <td> {{ $pelanggan->respon->nama}}</td>
                        <td>
                            {{-- <a class="btn btn-primary"  href="/jawaban/{{$pertanyaan->id}}" role="button" >Jawab</a> --}}
                            <a class="btn btn-primary"  href="/pelanggan/{{$pelanggan->id}}" role="button" >Detail</a>
                            {{-- <a class="btn btn-primary"  href="/pelanggan/{{$pelanggan->id}}/edit" role="button" >Edit</a> --}}
                            <a href="/bookings/{{$pelanggan->id}}/edit" class="btn btn-primary ">Hubungi</a>
                        </td>
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
{{-- </div> --}}
@endsection

@push('jsDT')
<!-- DataTables -->
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#datatable').DataTable();
    });
</script>
@endpush

@push('cssDT')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">

@endpush
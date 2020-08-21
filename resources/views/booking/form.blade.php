@extends('adminlte.master')

@push('script-head')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script> 
@endpush

@section('content')
<div class="card">
<div class="ml-3">
  <div class="card-header">
    <h3 class="card-title">Booking Pelanggan</h3>
  </div>
    <form action="/bookings" method="POST">
        @csrf
        <div class="card-body">
        <div class="form-group"> 
            <label for="users_id">Nama MRA/SA : </label>
            <input type="text" class="form-control" readonly  value="{{ Auth::user()->name }}">
        </div>
        <div class="form-group">
            <label for="pelanggan_id">Nama Pelanggan : </label>
            <input type="text" class="form-control" readonly  value="{{$pelanggan->nama}}">
        </div>
        <div class="form-group">
            <label for="pelanggan_id">No. Telpon : </label>
            <input type="text" class="form-control" readonly  value="{{$pelanggan->no_telp}}">
        </div>
        <div>
        <p>Hubungi Pelanggan : </p>
        <a href="tel:{{$pelanggan->no_telp}}"><img src="{{asset('/img/clipart1243931.png')}}" alt="" width="10%" /></a>
        </div>
        <br>
        <div class="form-group"> 
            <label for="contact_person">Penjawab (kosongkan jika tidak menjawab) : </label>
            <input type="text" class="form-control" name="contact_person" placeholder="Masukkan nama penjawab" id="contact_person">
        </div>
        <div class="form-group">
          <label for="respon_id">Respon</label>
          <select name="respon_id" id="respon_id" class="form-control">
            @foreach ($respons as $respon)
              @if ($respon->id == $pelanggan->respon_id)
                <option value="{{$respon->id}}" selected> {{ $respon->nama }} </option>
              @else 
                <option value="{{$respon->id}}"> {{ $respon->nama }} </option>
              @endif
            @endforeach
          </select>
        </div>
        <div class="form-group"> 
            <label for="tgl_servis">Tanggal Service (Jika Booking) : </label>
            <input type="date" class="form-control" name="tgl_servis" placeholder="Masukkan tanggal servis (jika booking)" id="tgl_servis">
        </div>
        
        <input hidden name="user_id" value="{{Auth::user()->id}}">
        <input hidden name="pelanggan_id" value="{{$pelanggan->id}}">
        <input hidden name="created_at" value="{{\Carbon\Carbon::now()}}">
        <input hidden name="updated_at" value="{{\Carbon\Carbon::now()}}">
        <br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
</div>
</div>
@endsection

{{-- @push('scripts')
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
@endpush --}}
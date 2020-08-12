@extends('adminlte.master')

@push('script-head')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script> 
@endpush

@section('content')
<div class="card">
<div class="ml-3">
  <div class="card-header">
    <h3 class="card-title">Input pelanggan</h3>
  </div>
    <form action="/pelanggan" method="POST">
        @csrf
        <div class="card-body">
        <div class="form-group"> 
            <label for="nama">Nama Pelanggan : </label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama pelanggan" id="nama">
        </div>
        <div class="form-group"> 
            <label for="no_polisi">No. Polisi : </label>
            <input type="text" class="form-control" name="no_polisi" placeholder="Masukkan nomor polisi" id="no_polisi">
        </div>
        <div class="form-group"> 
            <label for="model_type">Tipe Mobil : </label>
            <input type="text" class="form-control" name="model_type" placeholder="Masukkan tipe mobil" id="model_type">
        </div>
        <div class="form-group"> 
            <label for="no_telp">No. Telpon : </label>
            <input type="text" class="form-control" name="no_telp" placeholder="Masukkan nomor telpon" id="no_telp">
        </div>
        <div class="form-group">
          <label for="respon_id">Status</label>
          <select name="respon_id" id="respon_id" class="form-control">
            @foreach ($respons as $respon)
              <option value="{{$respon->id}}"> {{ $respon->nama }} </option>
            @endforeach
          </select>
        </div>
        
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
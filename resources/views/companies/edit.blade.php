
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />


<script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });

</script>


<div class="row">
<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Form Update Companies</h3>
    </div><!-- /.box-header -->
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

  @if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
  @endif

    <div class="box-body">
    <form method="post" action="{{ url ('Transisi/Companies/UpdatePost', $companies->id_companies )}}" enctype="multipart/form-data">
          {{ csrf_field() }}
      <table id="example2" class="table table-bordered table-hover">

<tr>
<td>Nama Company</td>
<td><input class="form-control" type="text" name="nama" value=" {{$companies->nama}} "/>
</tr>
<tr>
<td>Email</td>
<td><input class="form-control" type="text" name="email" value="{{$companies->email}}"/>
</tr>
<tr>
  <td>Logo</td>
        <td>
            <a class="form-group btn-default"><img src="{{ url( '/storage/app/company/'.$companies->logo ) }}" id="showgambar" style="max-width:100px;max-height:100px;float:left;"  /></a>
    
          <a class="form-group btn-default"><input type="file" id="inputgambar" name="logo" class="validate"/></a>
        </td>

    </tr>
<tr>
<td>Website</td>
<td><input class="form-control" type="text" placeholder="https://" name="website" value="{{$companies->website}}"/>
</tr>

<tr>
<td>&nbsp;</td>
<td><input type="submit" class="btn btn-sm btn-info btn-flat pull-left" value="Update"/>
<a href="{{ url('Transisi/Companies/') }}" class="btn btn-sm btn-danger btn-flat pull-right">Kembali</a></td>
</tr>

</table>      
</form>
    </div><!-- /.box-body -->
  </div><!-- /.box -->


</div><!-- /.col -->
</div><!-- /.row -->

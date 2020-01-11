
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />

<div class="row">
<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Form Tambah Companies</h3>
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
    <form method="post" action="{{url('Transisi/Companies/CreatePost')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
      <table id="example2" class="table table-bordered table-hover">

<tr>
<td>Nama Company</td>
<td><input class="form-control" type="text" name="nama" value=""/>
</tr>
<tr>
<td>Email</td>
<td><input class="form-control" type="text" name="email" value=""/>
</tr>
<tr>
<td>Logo</td>
<td><input class="form-control" type="file" name="logo" value=""/>
</tr>
<tr>
<td>Website</td>
<td><input class="form-control" type="text" placeholder="https://" name="website" value=""/>
</tr>


<tr>
<td>&nbsp;</td>
<td><input type="submit" class="btn btn-sm btn-info btn-flat pull-left" value="Simpan"/>
<a href="{{ url('Transisi/Companies/') }}" class="btn btn-sm btn-danger btn-flat pull-right">Kembali</a></td>
</tr>

</table>      
</form>
    </div><!-- /.box-body -->
  </div><!-- /.box -->


</div><!-- /.col -->
</div><!-- /.row -->

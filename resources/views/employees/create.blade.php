
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />

<div class="row">
<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Form Tambah Employees</h3>
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
    <form method="post" action="{{url('Transisi/Employees/CreatePost')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
      <table id="example2" class="table table-bordered table-hover">

<tr>
<td>Nama</td>
<td><input class="form-control" type="text" name="nama" value=""/>
</tr>
<tr>
<td>Pilihan Company</td>
<td><select class="form-control pup" name="id_companies" id="id_companies" required="">
        @if($companies = DB::table('companies')->get())
        @foreach($companies as $row)
        
        <option value="{{ $row->id_companies }}">
            {{ $row->nama }}</option>
        @endforeach
        @endif
        </select></td>
</tr>

<tr>
<td>Email</td>
<td><input class="form-control" type="text" name="email" value=""/>
</tr>

<tr>
<td>&nbsp;</td>
<td><input type="submit" class="btn btn-sm btn-info btn-flat pull-left" value="Simpan"/>
<a href="{{ url('Transisi/Employees/') }}" class="btn btn-sm btn-danger btn-flat pull-right">Kembali</a></td>
</tr>

</table>      
</form>
    </div><!-- /.box-body -->
  </div><!-- /.box -->


</div><!-- /.col -->
</div><!-- /.row -->

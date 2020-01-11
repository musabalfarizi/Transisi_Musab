
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />

<div class="row">
<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Form Update Employees</h3>
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
    <form method="post" action="{{ url ('Transisi/Employees/UpdatePost', $employees->id_employees )}}" enctype="multipart/form-data">
          {{ csrf_field() }}
      <table id="example2" class="table table-bordered table-hover">

<tr>
<td>Nama Employees</td>
<td><input class="form-control" type="text" name="nama" value=" {{$employees->nama}} "/>
</tr>

<tr>
  <td ><label for="job_title">Company :</label></td>
  <td>
              <select  class="form-control btn-default" name='id_companies'>
       @if($companies = DB::table('companies')->get())
       @endif
        @foreach($companies as $ku)
        
        <option value="{{ $ku->id_companies }}"
                @if ($employees->id_companies === $ku->id_companies)   selected
                @endif
            >
            {{ $ku->nama }}</option>
        @endforeach
</select>
</td>
</tr>

<tr>
<td>Email</td>
<td><input class="form-control" type="text" name="email" value="{{$employees->email}}"/>
</tr>


<tr>
<td>&nbsp;</td>
<td><input type="submit" class="btn btn-sm btn-info btn-flat pull-left" value="Update"/>
<a href="{{ url('Transisi/Employees/') }}" class="btn btn-sm btn-danger btn-flat pull-right">Kembali</a></td>
</tr>

</table>      
</form>
    </div><!-- /.box-body -->
  </div><!-- /.box -->


</div><!-- /.col -->
</div><!-- /.row -->

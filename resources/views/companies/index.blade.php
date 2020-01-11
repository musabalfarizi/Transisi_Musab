<script type="text/javascript">
  $(function () {
    $("#example1").dataTable();
    $('#example2').dataTable({
      "bPaginate": true,
      "bLengthChange": false,
      "bFilter": false,
      "bSort": false,
      "bInfo": true,
      "bAutoWidth": true
    });
  });
</script>
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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
  

<div class="row">
<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">DATA Companies</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Nama Company</th>
            <th>Email</th>
            <th>Logo</th>
            <th>Website</th>
            <th class="text-info">Show</th>
            <th class="text-info">Edit</th>
            <th class="text-danger">Delete</th>
          </tr>
        </thead>
        <tbody>
        
		    @foreach($companies as $a)
          <tr>
			<td>{{$a->nama}}</td>
			<td>{{$a->email}}</td>
      <td><img  style="max-width:100px;max-height:100px;float:left;"  src="{{ url('/storage/app/company/'.$a->logo) }}"></td>
      <td>{{$a->website}}</td>

      <td><div><button><a  href="{{ url('Transisi/Companies/Tampil',$a->id_companies)}}"> <img src="{{ asset('folder/leaf.png')}}"  width="18" length="18" ></a></button></div></td>
      <td><div><button><a  href="{{ url('Transisi/Companies/Update',$a->id_companies)}}"> <img src="{{ asset('folder/edit.png')}}"  width="18" length="18" ></a></button></div></td>
      <td><div>
          <form  action="/Companies/{{ $a->id_companies }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
			<button onclick="return confirm('Yakin Anda Ingin Menghapus Data Ini {{ $a->nama }} ?')"><img src="{{ asset('folder/trash.png') }}" width="18" length="18"></button>
    </form>
    </div> 
			</td>
          </tr>
           @endforeach
         
        </tbody>
        <tfoot>
          <tr>
		  <a href="{{ url ('Transisi/Companies/Create')}}" class="btn btn-sm btn-info btn-flat pull-left">Tambah data</a>
			
          </tr>
        </tfoot>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->


</div><!-- /.col -->
</div><!-- /.row -->



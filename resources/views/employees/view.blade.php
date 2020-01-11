<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
  
<div class="row">
<div class="col-xs-12">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">View Employees</h3>
		</div>
		<div class="box-body">
			<table id="example2" class="table table-bordered table-hover">

<tr>
<td>Nama Employees :</td>
<td><a class="form-control btn-default">@php echo $employees->nama; @endphp</a></td>
</tr>
<tr>
	<td ><label for="job_title">Company :</label></td>
	<td>
              <select disabled class="form-control btn-default" name='id_companies'>
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
<td> <a class="form-control btn-default"> @php echo $employees->email; @endphp</a></td>
</tr>

<tr>
<td>&nbsp;</td>
<td>
<a href="{{ url('Transisi/Employees/') }}" class="btn btn-sm btn-danger btn-flat pull-right">Kembali</a></td>
</tr>
</table>
		</div>
	</div>
	</div>
</div>
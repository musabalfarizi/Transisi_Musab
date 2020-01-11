<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
  
<div class="row">
<div class="col-xs-12">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">View Companies</h3>
		</div>
		<div class="box-body">
			<table id="example2" class="table table-bordered table-hover">

<tr>
<td>Nama</td>
<td><a class="form-control btn-default">@php echo $companies->nama; @endphp</a></td>
</tr>
<tr>
<td>Email</td>
<td> <a class="form-control btn-default"> @php echo $companies->email; @endphp</a></td>
</tr>
<tr>
<td>Logo</td>
<td><a class="form-group btn-default"> <img style="max-width:100px;max-height:100px;float:left;"  src="{{ url('/storage/app/company/'.$companies->logo) }}"></a></td>
</tr>
<tr>
<td>Website</td>
<td> <a class="form-control btn-default"> @php echo $companies->website; @endphp</a></td>
</tr>

<tr>
<td>&nbsp;</td>
<td>
<a href="{{ url('Transisi/Companies/') }}" class="btn btn-sm btn-danger btn-flat pull-right">Kembali</a></td>
</tr>
</table>
		</div>
	</div>
	</div>
</div>
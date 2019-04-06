@extends('Admin.About.base')

@section('action-content')

<div class="adminAbout">
	<table class="table">
		<tr>
			<td>Name</td>
			<td>This is Website Name</td>
		</tr>
		<tr>
			<td>Description</td>
			<td>This is Website Description of Amrit kafle. </td>
		</tr>
				<tr>
			<td>Photo</td>
			<td>This is Website Description of Amrit kafle. </td>
		</tr>
		<tr>
			<td><button  class="btn btn-primary">View</button></td>
			<td><button  class="btn btn-success">Edit</button></td>
			<td><button  class="btn btn-danger">Delete</button></td>
		</tr>
	</table>
</div>

@endsection
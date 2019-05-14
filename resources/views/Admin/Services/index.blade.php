@extends('Admin.About.base')

@section('action-content')
<div class="row">
	<div class="col-lg-12">
		<table class="table">
			<tr>
				<td>Sn</td>
				<td>Project Name</td>
				<td>Action</td>
				<td>
					<a href="{{route('Services.create')}}"  class="btn btn-primary btn-xm">Create</a>
				</td>
			</tr>
			@foreach($Service as $Services)
			<tr>

				<td>{{$Services->id}}</td>
				<td>{{$Services->title}}</td>
				<td><a href="{{route('Services.show',$Services->id )}}" class="btn btn-outline-info btn-sm" style="margin-right: 20px;">View</a>
					<a href="{{route('Services.edit',$Services->id )}}" class="btn btn-outline-success btn-sm" style="margin-right: 20px;">Edit</a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
	
</div>

@endsection
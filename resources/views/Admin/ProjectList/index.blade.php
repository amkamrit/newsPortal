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
					<a href="{{route('ProjectList.create')}}"  class="btn btn-primary btn-xm">Create</a>
				</td>
			</tr>
			@foreach($ProjectList as $ProjectLists)
			<tr>

				<td>{{$ProjectLists->id}}</td>
				<td>{{$ProjectLists->projectTitle}}</td>
				<td><a href="{{route('ProjectList.show',$ProjectLists->id )}}" class="btn btn-outline-info btn-sm" style="margin-right: 20px;">View</a>
					<a href="{{route('ProjectList.edit',$ProjectLists->id )}}" class="btn btn-outline-success btn-sm" style="margin-right: 20px;">Edit</a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
	
</div>

@endsection
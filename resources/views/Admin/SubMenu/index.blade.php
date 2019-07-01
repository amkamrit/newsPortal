@extends('Admin.SubMenu.base')

@section('action-content')

<div class="row">
	<div class="col-lg-12">
		<table class="table">
			<tr>
				<td>Sn</td>
				<td>Name</td>
				<td>Action</td>
				<td>
					<a href="{{route('subMenu.create')}}"  class="btn btn-primary btn-xm">Create</a>
				</td>
			</tr>
			@foreach($submenu as $submenus)
			<tr>

				<td>{{$submenus->id}}</td>
				<td>{{$submenus->name}}</td>
				<td>
					<a href="{{route('subMenu.edit', $submenus->id)}}"  class="btn btn-success">Edit</a>
					
			</tr>
			@endforeach
		</table>
	</div>
	
</div>

@endsection
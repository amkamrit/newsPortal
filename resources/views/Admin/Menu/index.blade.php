@extends('Admin.Menu.base')

@section('action-content')

<div class="row">
	<div class="col-lg-12">
		<table class="table">
			<tr>
				<td>Sn</td>
				<td>Name</td>
				<td>Action</td>
				<td>
					<a href="{{route('menu.create')}}"  class="btn btn-primary btn-xm">Create</a>
				</td>
			</tr>
			@foreach($menu as $menus)
			<tr>

				<td>{{$menus->id}}</td>
				<td>{{$menus->name}}</td>
				<td>
					<a href="{{route('menu.edit', $menus->id)}}"  class="btn btn-success">Edit</a>
					
			</tr>
			@endforeach
		</table>
		{{$menu->links()}}
	</div>
	
</div>

@endsection
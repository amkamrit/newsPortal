@extends('Admin.MyCline.base')

@section('action-content')
<div class="row">
	<div class="col-lg-12">
		<table class="table">
			<tr>
				<td>Sn</td>
				<td>Name</td>
				<td>Email</td>
				<td>Action</td>
			</tr>
			@foreach($myclines as $mycline)
			<tr>

				<td>{{$mycline->id}}</td>
				<td>{{$mycline->name}}</td>
				<td>{{$mycline->email}}</td>
				<td><a href="{{route('MyCline.show',$mycline->id )}}" class="btn btn-outline-info btn-sm" style="margin-right: 20px;">View</a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
	
</div>

@endsection
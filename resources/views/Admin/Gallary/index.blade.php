@extends('Admin.Gallary.base')

@section('action-content')
<div class="row">
	<div class="col-lg-12">
		<table class="table">
			<tr>
				<td>Sn</td>
				<td>Name</td>
				<td>Image</td>
				<td>Action</td>
				<td>
					<a href="{{route('Gallary.create')}}"  class="btn btn-primary btn-xm">Create</a>
				</td>
			</tr>
			@foreach($gallary as $gallarys)
			<tr>

				<td>{{$gallarys->id}}</td>
				<td>{{$gallarys->name}}</td>
				<td>
					<?php $url=url('image/'.$gallarys->image); 
                                ?>
                     <img src="{{$url}}" height="50px" width="50px">
				</td>
				<td><form action="{{route('Gallary.destroy', [$gallarys->id])}}" method="POST">
    			<input type="hidden" name="_method" value="DELETE">
   				<input type="hidden" name="_token" value="{{ csrf_token() }}">
   				<input type="submit" class="btn btn-danger" value="Delete"/>
				</form>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
	
</div>

@endsection
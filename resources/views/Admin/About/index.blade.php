@extends('Admin.About.base')

@section('action-content')


<div class="adminAbout">
	<table class="table">
		@foreach($about as $abouts)
		<tr>
			<td>Name</td>
			<td>{{$abouts->name}}</td>
		</tr>
		<tr>
			<td>Description</td>
			<td>{!!$abouts->description!!} </td>
		</tr>
				<tr>
			<td>Photo</td>
			<?php $url=url('image/'.$abouts->photo); 
                                ?>
			<td> <img src="{{$url}}" height="200px" width="200px"></td>
		</tr>
		<tr>
			<td><a href="{{route('About.edit', $abouts->id)}}"  class="btn btn-success">Edit</a></td>
			<td>


<form action="{{route('About.destroy', [$abouts->id])}}" method="POST">
    		<input type="hidden" name="_method" value="DELETE">
   		<input type="hidden" name="_token" value="{{ csrf_token() }}">
   		<input type="submit" class="btn btn-danger" value="Delete"/>
</form>

			@endforeach
			@if($about->isEmpty())
			<td><a href="{{route('About.create')}}"  class="btn btn-primary">Create</a></td>
			@else
			
			@endif
			
		</tr>
		
	</table>
</div>

@endsection
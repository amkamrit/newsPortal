@extends('Admin.About.base')

@section('action-content')

<div class="adminAbout">
	<table class="table">
		<tr>
			<td>Name</td>
			<td>{{$services->title}}</td>
		</tr>
			<td>Project Category</td>
			<td>{{$services->category}}</td>
		</tr>
			<td>Project Sub Category</td>
			<td>{{$services->subcategory}}</td>
		</tr>
		<tr>
			<td>Description</td>
			<td>{!!$services->description!!} </td>
		</tr>
				<tr>
			<td>Cover Image</td>
			<?php $url=url('image/'.$services->photo); 
                                ?>
			<td> <img src="{{$url}}" height="200px" width="200px"></td>
		</tr>
		<tr>
			<td><a href="{{route('Services.edit', $services->id)}}"  class="btn btn-success">Edit</a></td>
			<td>


<form action="{{route('Services.destroy', [$services->id])}}" method="POST">
    		<input type="hidden" name="_method" value="DELETE">
   		<input type="hidden" name="_token" value="{{ csrf_token() }}">
   		<input type="submit" class="btn btn-danger" value="Delete"/>
</form>
			
		</tr>
		
	</table>
</div>
@endsection
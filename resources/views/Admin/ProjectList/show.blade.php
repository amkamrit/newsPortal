@extends('Admin.About.base')

@section('action-content')

<div class="adminAbout">
	<table class="table">
		<tr>
			<td>Name</td>
			<td>{{$projects->projectTitle}}</td>
		</tr>
			<td>Project Category</td>
			<td>{{$projects->category}}</td>
		</tr>
			<td>Project Sub Category</td>
			<td>{{$projects->subcategory}}</td>
		</tr>
		<tr>
			<td>Description</td>
			<td>{!!$projects->description!!} </td>
		</tr>
				<tr>
			<td>Cover Image</td>
			<?php $url=url('image/'.$projects->coverImage); 
                                ?>
			<td> <img src="{{$url}}" height="200px" width="200px"></td>
		</tr>
		<tr>
			<td><a href="{{route('ProjectList.edit', $projects->id)}}"  class="btn btn-success">Edit</a></td>
			<td>


<form action="{{route('ProjectList.destroy', [$projects->id])}}" method="POST">
    		<input type="hidden" name="_method" value="DELETE">
   		<input type="hidden" name="_token" value="{{ csrf_token() }}">
   		<input type="submit" class="btn btn-danger" value="Delete"/>
</form>
			
		</tr>
		
	</table>
</div>
@endsection
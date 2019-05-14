@extends('Admin.SocialMedia.base')

@section('action-content')

<div class="adminAbout">
	<table class="table">
		<tr>
			<td>Name</td>
			<td>{{$socialMedia->linkName}}</td>
		</tr>
			<td>Project Category</td>
			<td>{{$socialMedia->link}}</td>
		</tr>
		<tr>
			<td><a href="{{route('SocialMedia.edit', $socialMedia->id)}}"  class="btn btn-success">Edit</a></td>
			<td>


<form action="{{route('SocialMedia.destroy', [$socialMedia->id])}}" method="POST">
    		<input type="hidden" name="_method" value="DELETE">
   		<input type="hidden" name="_token" value="{{ csrf_token() }}">
   		<input type="submit" class="btn btn-danger" value="Delete"/>
</form>
			
		</tr>
		
	</table>
</div>
@endsection
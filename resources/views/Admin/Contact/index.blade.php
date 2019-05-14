@extends('Admin.Contact.base')

@section('action-content')


<div class="adminAbout">
	<table class="table">
		@foreach($contact as $contacts)
		<tr>
			<td>Name</td>
			<td>{{$contacts->name}}</td>
		</tr>
		<tr>
			<td>Address</td>
			<td>{{$contacts->address}} </td>
		</tr>
		<tr>
			<td>Zip Code</td>
			<td>{{$contacts->zipcode}} </td>
		</tr>
		<tr>
			<td>Post Box Number</td>
			<td>{{$contacts->postboxnumber}}</td>
		</tr>
		<tr>
			<td>Pan Number</td>
			<td>{{$contacts->pannumber}}</td>
		</tr>
		<tr>
			<td>Mobile Number</td>
			<td>{{$contacts->mobilenumber}}</td>
		</tr>
		<tr>
			<td>Office Number</td>
			<td>{{$contacts->officenumber}}</td>
		</tr>
		<tr>
			<td>Website</td>
			<td>{{$contacts->website}}</td>
		</tr>
		<tr>
			<td><a href="{{route('Contact.edit', $contacts->id)}}"  class="btn btn-success">Edit</a></td>
			<td>


<form action="{{route('Contact.destroy', [$contacts->id])}}" method="POST">
    		<input type="hidden" name="_method" value="DELETE">
   		<input type="hidden" name="_token" value="{{ csrf_token() }}">
   		<input type="submit" class="btn btn-danger" value="Delete"/>
</form>

			@endforeach
			@if($contact->isEmpty())
			<td><a href="{{route('Contact.create')}}"  class="btn btn-primary">Create</a></td>
			@else
			
			@endif
			
		</tr>
		
	</table>
</div>

@endsection
@extends('Admin.MyCline.base')

@section('action-content')

<div class="adminAbout">
	<table class="table">
		<tr>
			<td>Name</td>
			<td>{{$cline->name}}</td>
		</tr>
			<td>Email</td>
			<td>{{$cline->email}}</td>
		</tr>
			<td>Message</td>
			<td>{{$cline->message}}</td>
		</tr>
		<tr>
			<td>
<form action="{{route('MyCline.destroy', [$cline->id])}}" method="POST">
    		<input type="hidden" name="_method" value="DELETE">
   		<input type="hidden" name="_token" value="{{ csrf_token() }}">
   		<input type="submit" class="btn btn-danger" value="Delete"/>
</form>
</td>
<td><button class="btn btn-success">Send E-mail or Reply</button></td>
			
		</tr>
		
	</table>
</div>
@endsection
@extends('Admin.Post.base')

@section('action-content')


<div class="row">
	<div class="col-lg-12">
		<table class="table">
			<tr>
				<td>Sn</td>
				<td> Name</td>
				<td>Action</td>
				<td>
					<a href="{{route('post.create')}}"  class="btn btn-primary btn-xm">Create</a>
				</td>
			</tr>
			@foreach($post as $posts)
			<tr>

				<td>{{$posts->id}}</td>
				<td>{{$posts->name}}</td>
				<td><a href="{{route('post.show',$posts->id )}}" class="btn btn-outline-info btn-sm" style="margin-right: 20px;">View</a>
					<a href="{{route('post.edit',$posts->id )}}" class="btn btn-outline-success btn-sm" style="margin-right: 20px;">Edit</a>
				</td>
			</tr>
			@endforeach
		</table>
		{{$post->links()}}
	</div>
	
</div>


@endsection
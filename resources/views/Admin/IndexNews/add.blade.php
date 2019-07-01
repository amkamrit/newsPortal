@extends('Admin.Post.base')

@section('action-content')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($post as $posts)
    <tr>
      <th scope="row">{{$posts->id}}</th>
      <td>{{$posts->name}}</td>
      <td>{{$posts->publicdate}}</td>
      <td>
      	<form action="{{url('Admin/indexing', [$posts->id])}}" method="POST">
      		{{ csrf_field() }}
      		<input type="text" name="indexing" hidden value="{{$id}}">
      	<button type="submit" class="btn btn-success">Set as Index News</button>
      	</form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{!! $post->links() !!}
@endsection
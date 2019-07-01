@extends('Admin.Post.base')


@section('action-content')

<div class="row">
	<div class="col-md-10">
		<h3>SHOW SINGLE NEWS</h3>
	</div>
	<hr>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<tc>
					<th>Sn</th>
					<th>{{$posts->id}}</th>
				</tc>
			</thead>
			<tbody>
				<tc>
					<td>Title </td>
					<td>{{$posts->name}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td>Description </td>
					<td>{!!$posts->description!!}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td> Status </td>
					<td>
						@if($posts->status==0)
						Active
						@else
						Deactive
						@endif
					</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td> Public Date </td>
					<td>{{$posts->publicdate}}</td>
				</tc>
			</tbody>
			<tbody>
				<tc>
					<td> Image </td>
					<?php $url=url('image/'.$posts->image ) ?>
					<td>
						<img src="{{$url}}" width="300px" height="300px;">
					</td>
				</tc>
			</tbody>

			

			<tbody>
				
				<td><a href="{{route('post.edit',$posts->id)}}" style="padding-right: 8px;" class="btn btn-primary a-btn-slide-text"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span></a>
        <br><br>
				</td>
			</tbody>

			</tbody>
			
		</table>
		
	</div>
</div>

@endsection
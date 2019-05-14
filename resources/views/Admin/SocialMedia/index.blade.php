@extends('Admin.SocialMedia.base')

@section('action-content')

<div class="row">
	<div class="col-lg-12">
		<table class="table">
			<tr>
				<td>Sn</td>
				<td> Name</td>
				<td>Action</td>
				<td>
					<a href="{{route('SocialMedia.create')}}"  class="btn btn-primary btn-xm">Create</a>
				</td>
			</tr>
			@foreach($socialMedia as $socialMedias)
			<tr>

				<td>{{$socialMedias->id}}</td>
				<td>{{$socialMedias->linkName}}</td>
				<td><a href="{{route('SocialMedia.show',$socialMedias->id )}}" class="btn btn-outline-info btn-sm" style="margin-right: 20px;">View</a>
					<a href="{{route('SocialMedia.edit',$socialMedias->id )}}" class="btn btn-outline-success btn-sm" style="margin-right: 20px;">Edit</a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
	
</div>


@endsection
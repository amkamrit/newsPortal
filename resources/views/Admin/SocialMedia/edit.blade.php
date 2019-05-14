@extends('Admin.SocialMedia.base')

@section('action-content')

<div class="createStyle">
	<div class="row">
		<div class="col-sm-12">
			<h1>EDIT MEDIA LINK </h1>
		</div>
	</div>

<form class="form" action="{{route('SocialMedia.update', [$socialMedia->id])}} " method="POST" enctype="multipart/form-data">
	   <input type="hidden" name="_method" value="PUT">
	  {{ csrf_field() }}

	<div class="row">
		<div class="col-sm-12">
		<div class="form-group">
			<label class="control-label">Name</label>
			<input type="text" name="linkName" class="form-control" value="{{$socialMedia->linkName}}" required>
		<div class="help-block"></div>
				<div class="form-group">
			<label class="control-label">Link</label>
			<input type="text" name="link" class="form-control" value="{{$socialMedia->link}}" required>
		<div class="help-block"></div>
				</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
			<button class="btn btn-success" type="submit">Save</button>
		<div class="help-block"></div>
		</div>
	</div>
</form>
</div> 
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>

@endsection
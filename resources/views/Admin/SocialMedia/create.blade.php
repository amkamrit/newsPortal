@extends('Admin.SocialMedia.base')

@section('action-content')

<div class="createStyle">
	<div class="row">
		<div class="col-sm-12">
			<h1>CREATE SOCIAL MEDIA LINK </h1>
		</div>
	</div>

<form class="form" action="{{route('SocialMedia.store')}} " method="POST" enctype="multipart/form-data">
	  @csrf

	<div class="row">
		<div class="col-sm-12">
		<div class="form-group">
			<label class="control-label">Title</label>
			<input type="text" name="linkName" class="form-control" required>
		<div class="help-block"></div>
				<div class="form-group">
			<label class="control-label">URL</label>
			<input type="text" name="link" class="form-control" required>
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
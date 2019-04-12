@extends('Admin.About.base')

@section('action-content')
<div class="createStyle">
	<div class="row">
		<div class="col-sm-12">
			<h1>EDIT ABOUT </h1>
		</div>
	</div>

	<form action="{{route('About.update', [$about->id])}}" method="POST">
	  
	   <input type="hidden" name="_method" value="PUT">
	  {{ csrf_field() }}
	<div class="row">
		<div class="col-sm-12">
		<div class="form-group">
			<label class="control-label">Name</label>
			<input type="text" name="name" value="{{$about->name}}" class="form-control" required>
		<div class="help-block"></div>
		<div class="form-group">
			<label class="control-label">Description</label>
			<textarea name="description" class="form-control" id="description" required>{{$about->description}}</textarea>
		<div class="help-block"></div>
	</div>
</div>
</div>
		<div class="col-sm-12">
			<div class="form-group">
			<label class="control-label">Photo</label>
			<?php $url=url('image/'.$about->photo); 
                                ?>
			<input type="file" name="photo" class="form-control" value="{{$about->photo}}" required >
			<img src="{{$url}}" height="100px" width="100px">
		<div class="help-block"></div>
		</div>
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
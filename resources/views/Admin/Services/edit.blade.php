@extends('Admin.About.base')

@section('action-content')

<div class="createStyle">
	<div class="row">
		<div class="col-sm-12">
			<h1>EDIT SERVICE </h1>
		</div>
	</div>

<form class="form" action="{{route('Services.update', [$services->id])}} " method="POST" enctype="multipart/form-data">
	   <input type="hidden" name="_method" value="PUT">
	  {{ csrf_field() }}

	<div class="row">
		<div class="col-sm-12">
		<div class="form-group">
			<label class="control-label">Service Title</label>
			<input type="text" name="title" class="form-control" value="{{$services->title}}" required>
		<div class="help-block"></div>
				<div class="form-group">
			<label class="control-label">Category</label>
			<input type="text" name="category" class="form-control" value="{{$services->category}}" required>
		<div class="help-block"></div>
				<div class="form-group">
			<label class="control-label">Sub Catrgory</label>
			<input type="text" name="subcategory" class="form-control" value="{{$services->subcategory}}" required>
		<div class="help-block"></div>
		<div class="form-group">
			<spam>Description</spam>
			<textarea name="description" class="form-control" id="description" required>
				{{$services->description}}
			</textarea>
		<div class="help-block"></div>
	</div>
</div>
</div>
		<div class="col-sm-12">
			<div class="form-group">
			<label class="control-label">Cover Image</label>
			<?php $url=url('image/'.$services->photo); 
                                ?>
			<input type="file" name="photo" class="form-control" value="{{$services->photo}}" >
			<img src="{{$url}}" height="100px" width="100px">
		<div class="help-block"></div>
		</div>
	</div>
			<div class="col-sm-12">
			<div class="form-group">
			<label class="control-label">File</label>
			<input type="file" name="file" class="form-control" value="{{$services->file}}">
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
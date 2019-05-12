@extends('Admin.About.base')

@section('action-content')

<div class="createStyle">
	<div class="row">
		<div class="col-sm-12">
			<h1>EDIT PROJECT </h1>
		</div>
	</div>

<form class="form" action="{{route('ProjectList.update', [$project->id])}} " method="POST" enctype="multipart/form-data">
	  @csrf

	<div class="row">
		<div class="col-sm-12">
		<div class="form-group">
			<label class="control-label">Project Title</label>
			<input type="text" name="projectTitle" class="form-control" value="{{$project->projectTitle}}" required>
		<div class="help-block"></div>
				<div class="form-group">
			<label class="control-label">Category</label>
			<input type="text" name="category" class="form-control" value="{{$project->category}}" required>
		<div class="help-block"></div>
				<div class="form-group">
			<label class="control-label">Sub Catrgory</label>
			<input type="text" name="subcategory" class="form-control" value="{{$project->subcategory}}" required>
		<div class="help-block"></div>
		<div class="form-group">
			<spam>Description</spam>
			<textarea name="description" class="form-control" id="description" required>
				{{$project->description}}
			</textarea>
		<div class="help-block"></div>
	</div>
</div>
</div>
		<div class="col-sm-12">
			<div class="form-group">
			<label class="control-label">Cover Image</label>
			<?php $url=url('image/'.$project->coverImage); 
                                ?>
			<input type="file" name="coverImage" class="form-control" value="{{$project->coverImage}}" required>
			<img src="{{$url}}" height="100px" width="100px">
		<div class="help-block"></div>
		</div>
	</div>
			<div class="col-sm-12">
			<div class="form-group">
			<label class="control-label">File</label>
			<input type="file" name="file" class="form-control" value="{{$project->file}}" required>
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
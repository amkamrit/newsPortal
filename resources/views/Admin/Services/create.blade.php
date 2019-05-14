@extends('Admin.About.base')

@section('action-content')

<div class="createStyle">
	<div class="row">
		<div class="col-sm-12">
			<h1>CREATE SERVICE </h1>
		</div>
	</div>

<form class="form" action="{{route('Services.store')}} " method="POST" enctype="multipart/form-data">
	  @csrf

	<div class="row">
		<div class="col-sm-12">
		<div class="form-group">
			<label class="control-label">Service Title</label>
			<input type="text" name="title" class="form-control" required>
		<div class="help-block"></div>
				<div class="form-group">
			<label class="control-label">Category</label>
			<input type="text" name="category" class="form-control" required>
		<div class="help-block"></div>
				<div class="form-group">
			<label class="control-label">Sub Catrgory</label>
			<input type="text" name="subcategory" class="form-control" required>
		<div class="help-block"></div>
		<div class="form-group">
			<spam>Description</spam>
			<textarea name="description" class="form-control" id="description" required></textarea>
		<div class="help-block"></div>
	</div>
</div>
</div>
		<div class="col-sm-12">
			<div class="form-group">
			<label class="control-label">Cover Image</label>
			<input type="file" name="photo" class="form-control" required>
		<div class="help-block"></div>
		</div>
	</div>
			<div class="col-sm-12">
			<div class="form-group">
			<label class="control-label">File</label>
			<input type="file" name="file" class="form-control" required>
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
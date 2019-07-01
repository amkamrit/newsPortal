@extends('Admin.Gallary.base')

@section('action-content')

<div class="createStyle">
	<div class="row">
		<div class="col-sm-12">
			<h1>CREATE ADD </h1>
		</div>
	</div>

<form class="form" action="{{route('Gallary.store')}} " method="POST" enctype="multipart/form-data">
	  @csrf

	<div class="row">
		<div class="col-sm-12">
		<div class="form-group">
			<label class="control-label"> Title</label>
			<select name="name" class="form-control">
				<option value="adTop">AD Top</option>
				<option value="ad1">AD Index 1</option>
				<option value="ad2">AD Index 2</option>
				<option value="ad3">AD Index 3</option>
				<option value="ad4">AD Index 4</option>
				<option value="ad5">AD Index 5</option>
				<option value="ad6">AD Index 6</option>
				<option value="ad7">AD Index 7</option>
				<option value="ad8">AD Index 8</option>
				<option value="adSingle1">AD Single 1</option>
				<option value="adSingle2">AD Single 2</option>
				<option value="adSingle3">AD Single 3</option>
				<option value="adSingle4">AD Single 4</option>
				<option value="adSingle5">AD Single 5</option>
			</select>
		<div class="help-block"></div>
			</div>
		<div class="col-sm-12">
			<div class="form-group">
			<label class="control-label">Cover Image</label>
			<input type="file" name="image" class="form-control" required>
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
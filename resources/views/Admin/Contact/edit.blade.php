@extends('Admin.About.base')

@section('action-content')

<div class="createStyle">
	<div class="row">
		<div class="col-sm-12">
			<h1>EDIT CONTACT INFORMATION </h1>
		</div>
	</div>

<form class="form" action="{{route('Contact.update', [$contacts->id])}} " method="POST" enctype="multipart/form-data">
	   <input type="hidden" name="_method" value="PUT">
	  {{ csrf_field() }}

	<div class="row">
		<div class="col-sm-12">
		<div class="form-group">
			<label class="control-label">Name</label>
			<input type="text" name="name" class="form-control" value="{{$contacts->name}}" required>
		<div class="help-block"></div>
				<div class="form-group">
			<label class="control-label">Address</label>
			<input type="text" name="address" class="form-control" value="{{$contacts->address}}" required>
		<div class="help-block"></div>
				<div class="form-group">
			<label class="control-label">Zip Code</label>
			<input type="text" name="zipcode" class="form-control" value="{{$contacts->zipcode}}"  required>
		<div class="help-block"></div>
			<div class="form-group">
			<label class="control-label">Post Box Number</label>
			<input type="text" name="postboxnumber" class="form-control" value="{{$contacts->postboxnumber}}" required>
		<div class="help-block"></div>
			<div class="form-group">
			<label class="control-label">Pan Number</label>
			<input type="text" name="pannumber" class="form-control" value="{{$contacts->pannumber}}" required>
		<div class="help-block"></div>
			<div class="form-group">
			<label class="control-label">Mobile Number</label>
			<input type="text" name="mobilenumber" class="form-control" value="{{$contacts->mobilenumber}}" required>
		<div class="help-block"></div>
			<div class="form-group">
			<label class="control-label">Office Number</label>
			<input type="text" name="officenumber" class="form-control" value="{{$contacts->officenumber}}" required>
		<div class="help-block"></div>
			<div class="form-group">
			<label class="control-label">Website</label>
			<input type="text" name="website" class="form-control" value="{{$contacts->website}}" required>
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
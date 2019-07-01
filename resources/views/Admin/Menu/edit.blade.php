@extends('Admin.Menu.base')

@section('action-content')

<div class="createStyle">
	<div class="row">
		<div class="col-sm-12">
			<h1>EDIT MENU </h1>
		</div>
	</div>

<form class="form" action="{{route('menu.update', [$menu->id])}} " method="POST" enctype="multipart/form-data">
	   <input type="hidden" name="_method" value="PUT">
	  {{ csrf_field() }}

	<div class="row">
		<div class="col-sm-12">
		<div class="form-group">
			<label class="control-label"> Title</label>
			<input type="text" name="name" class="form-control" value="{{$menu->name}}" required>
		<div class="help-block"></div>
			</div>
		<div class="col-sm-12">
			<div class="form-group">
			<label class="control-label">Description</label>
			<textarea name="description" class="form-control" id="description" required>{{$menu->description}}</textarea>
		<div class="help-block"></div>
		</div>
	</div>
			<div class="col-sm-12">
			<div class="form-group">
			<label class="control-label">Status</label>
			<select name="status">
			<option value="{{$menu->status}}">
				@if($menu->status==0)
				Active
				@else
				Deactive
				@endif
			</option>
			<option value="0">Active</option>
			<option value="1">Deactive</option>
			</select>
		<div class="help-block"></div>
		</div>
	</div>
</div>
			
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
			<button class="btn btn-success" type="submit">Update</button>
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
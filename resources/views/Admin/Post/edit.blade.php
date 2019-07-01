@extends('Admin.SubMenu.base')

@section('action-content')


<div class="createStyle">
	<div class="row">
		<div class="col-sm-12">
			<h1>CREATE NEWS </h1>
		</div>
	</div>

<form class="form" action="{{route('post.update', [$post->id])}} " method="POST" enctype="multipart/form-data">
	   <input type="hidden" name="_method" value="PUT">
	  {{ csrf_field() }}

	<div class="row">
		<div class="col-sm-12">
		<div class="form-group">
			<label class="control-label"> Title</label>
			<input type="text" name="name" class="form-control" value="{{$post->name}}" required>
		<div class="help-block"></div>
			</div>
		</div>

		<div class="col-sm-12">
		<div class="form-group">
			<label class="control-label"> Select Main Menu</label>
			<select name="cid" class="form-control" required>
				<option value="{{$post->cid}}" hidden></option>
				@foreach($menu as $menus)
				<option value="{{$menus->id}}">{{$menus->name}}</option>
				@endforeach
			</select>
		<div class="help-block"></div>
			</div>
		</div>

		<div class="col-sm-12">
		<div class="form-group">
			<label class="control-label"> Select Sub Main Menu</label>
			<select name="scid" class="form-control" required>
				<option value="{{$post->scid}}" hidden></option>
				@foreach($submenu as $submenus)
				<option value="{{$submenus->id}}">{{$submenus->name}}</option>
				@endforeach
			</select>
		<div class="help-block"></div>
			</div>
		</div>

		<div class="col-sm-12">
		<div class="form-group">
			<label class="control-label"> Image</label>
			<input type="file" name="image" value="{{$post->image}}" class="form-control">
		<div class="help-block"></div>
			</div>
		</div>


		<div class="col-sm-12">
			<div class="form-group">
			<label class="control-label">Description</label>
			<textarea name="description" class="form-control" id="description" required>{{$post->description}}</textarea>
		<div class="help-block"></div>
		</div>
	</div>


	<div class="col-sm-12">
		<div class="form-group">
			<label class="control-label"> Date</label>
			<input type="text" name="publicdate" value="{{$post->publicdate}}" class="form-control" required>
		<div class="help-block"></div>
			</div>
		</div>

		<div class="col-sm-12">
		<div class="form-group">
			<label class="control-label"> Status</label>
			<select name="status" class="form-control" required>
				<option value="{{$post->status}}"></option>
				<option value="0">Active</option>
				<option value="1">Deactive</option>
			</select>
		<div class="help-block"></div>
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
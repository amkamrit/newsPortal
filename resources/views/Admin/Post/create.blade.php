@extends('Admin.SubMenu.base')

@section('action-content')


<div class="createStyle">
	<div class="row">
		<div class="col-sm-12">
			<h1>CREATE NEWS </h1>
		</div>
	</div>

<form class="form" action="{{route('post.store')}} " method="POST" enctype="multipart/form-data">
	  @csrf

	<div class="row">
		<div class="col-sm-12">
		<div class="form-group">
			<label class="control-label"> Title</label>
			<input type="text" name="name" class="form-control" required>
		<div class="help-block"></div>
			</div>
		</div>

		<div class="col-sm-12">
		<div class="form-group">
			<label class="control-label"> Select Main Menu</label>
			<select name="cid" class="form-control" required>
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
			<input type="file" name="image" class="form-control" required>
		<div class="help-block"></div>
			</div>
		</div>


		<div class="col-sm-12">
			<div class="form-group">
			<label class="control-label">Description</label>
			<textarea name="description" class="form-control" id="description" required></textarea>
		<div class="help-block"></div>
		</div>
	</div>

	<div class="col-sm-12">
		<div class="form-group">
			<label class="control-label"> Date</label>
			<input type="text" name="publicdate" class="form-control" required>
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
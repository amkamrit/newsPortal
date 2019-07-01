@extends('Admin.SubMenu.base')

@section('action-content')


<div class="createStyle">
	<div class="row">
		<div class="col-sm-12">
			<h1>CREATE SUB MENU </h1>
		</div>
	</div>

<form class="form" action="{{route('subMenu.store')}} " method="POST" enctype="multipart/form-data">
	  @csrf

	<div class="row">
		<div class="col-sm-12">
		<div class="form-group">
			<label class="control-label"> Title</label>
			<input type="text" name="name" class="form-control" required>
		<div class="help-block"></div>
			</div>

		<div class="col-sm-12">
		<div class="form-group">
			<label class="control-label"> Select Main Menu</label>
			<select name="mainMenu" class="form-control" required>
				@foreach($menu as $menus)
				<option value="{{$menus->id}}">{{$menus->name}}</option>
				@endforeach
			</select>
		<div class="help-block"></div>
			</div>

		<div class="col-sm-12">
			<div class="form-group">
			<label class="control-label">Description</label>
			<textarea name="description" class="form-control" id="description" required></textarea>
		<div class="help-block"></div>
		</div>
	</div>
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
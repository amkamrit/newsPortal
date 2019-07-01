@extends('Admin.Post.base')

@section('action-content')


<div class="row">
	<div class="col-sm-12">
		 <div class="panel panel-primary">
      <div class="panel-heading">
      	हेडलाइन (मात्र ८) <a href="{{url('Admin/add', 1)}}" class="btn btn-success">Add</a></div>
      @foreach($headline as $headlines)
      <div class="panel-body"> {{$headlines->name}}<br><br> 
      	<form action="{{url('Admin/indexingRemove', [$headlines->id])}}" method="POST">
      		{{ csrf_field() }}
      	<button type="submit" class="btn btn-success">Remove</button>
      	</form>
      </div>
      @endforeach
      </div>
    </div>
	<div class="col-sm-12">
		<div class="panel panel-primary">
      <div class="panel-heading">समाचार (मात्र ५ ) <a  href="{{url('Admin/add', 2)}}" class="btn btn-success">Add</a></div>
      @foreach($new as $news)
      <div class="panel-body"> {{$news->name}}<br><br> 
      	<form action="{{url('Admin/indexingRemove', [$news->id])}}" method="POST">
      		{{ csrf_field() }}
      	<button type="submit" class="btn btn-success">Remove</button>
      	</form>
      </div>
      @endforeach
    </div>
	</div>
		<div class="col-sm-12">
		<div class="panel panel-primary">
      <div class="panel-heading">सूचना प्रविधि (मात्र ५ ) <a href="{{url('Admin/add', 3)}}" class="btn btn-success">Add</a></div>
		@foreach($technology as $technologys)
      <div class="panel-body"> {{$technologys->name}}<br><br> 
      	<form action="{{url('Admin/indexingRemove', [$technologys->id])}}" method="POST">
      		{{ csrf_field() }}
      	<button type="submit" class="btn btn-success">Remove</button>
      	</form>
      </div>
      @endforeach
            
    </div>
	</div>
			<div class="col-sm-12">
		<div class="panel panel-primary">
      <div class="panel-heading">अन्तर्वार्ता (मात्र १ ) <a href="{{url('Admin/add', 4)}}" class="btn btn-success">Add</a></div>
      @foreach($intreview as $intreviews)
      <div class="panel-body"> {{$intreviews->name}}<br><br> 
      	<form action="{{url('Admin/indexingRemove', [$intreviews->id])}}" method="POST">
      		{{ csrf_field() }}
      	<button type="submit" class="btn btn-success">Remove</button>
      	</form>
      </div>
      @endforeach
    </div>
	</div>
			<div class="col-sm-12">
		<div class="panel panel-primary">
      <div class="panel-heading">मनोरञ्जन (मात्र ५) <a href="{{url('Admin/add', 5)}}" class="btn btn-success">Add</a></div>
            @foreach($enteredment as $enteredments)
      <div class="panel-body"> {{$enteredments->name}}<br><br> 
      	<form action="{{url('Admin/indexingRemove', [$enteredments->id])}}" method="POST">
      		{{ csrf_field() }}
      	<button type="submit" class="btn btn-success">Remove</button>
      	</form>
      </div>
      @endforeach
    </div>
	</div>
			<div class="col-sm-12">
		<div class="panel panel-primary">
      <div class="panel-heading">खेल (मात्र ५) <a href="{{url('Admin/add', 6)}}" class="btn btn-success" >Add</a></div>
       @foreach($sport as $sports)
      <div class="panel-body"> {{$sports->name}}<br><br> 
      	<form action="{{url('Admin/indexingRemove', [$sports->id])}}" method="POST">
      		{{ csrf_field() }}
      	<button type="submit" class="btn btn-success">Remove</button>
      	</form>
      </div>
      @endforeach
    </div>
	</div>
</div>


@endsection
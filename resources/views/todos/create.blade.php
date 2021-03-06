@extends('layouts.app')


@section('content')

<h1 class="text-center">Create todos</h1>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">

			<div class="card card-default">
				<div class="card-header">
					Create New Todos
				</div>
				<div class="card-body">
					@if($errors->any())
						<div class="alert alert-danger">
							<ul class="list-group">
								@foreach($errors->all() as $error)
								<li class="list-group-item">
									
									{{ $error}}
							
								</li>
								@endforeach
							</ul>
						</div>
					@endif
					<form action="{{route('todos.store')}}" method="POST">
						
						@csrf
						<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="name">
						</div>
						<div class="form-group">
							<textarea name="description" placeholder="description" id="" cols="30" rows="5" class="form-control"></textarea>
						</div>
						<div class="form-group text-center">
							<input type="submit" class="btn btn-success" name="submit" value="create todos">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>





@endsection
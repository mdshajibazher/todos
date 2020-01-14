@extends('layouts.app')

@section('title')

Details:  {{$todo->name}}

@endsection


@section('content')


	<h1 class="text-center my-5">{{ $todo->name }}</h1>
	<div class="row justify-content-center">

			
			<div class="col-md-6">
				<div class="card card-default">
					<div class="card-header">
						Details
					</div>

					<div class="card-body">
						{{ $todo->description }}
					</div>

				</div>
				<a href="{{route('todos.edit',$todo->id)}}" class="btn btn-info  my-2">Edit</a>
				<div style="display: inline-block;">
						<form action="{{route('todos.destroy',$todo->id)}}" method="POST">
						@csrf
						@method('DELETE')
						<input onclick="return confirm('Are You Sure?')" type="submit" value="Delete" class="btn btn-danger">
					</form>
				</div>
				
				
			</div>
			
	</div>

@endsection
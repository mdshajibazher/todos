@extends('layouts.app')


@section('title')

Todos List

@endsection

@section('content')

<h1 class="text-center my-5">Todos Page</h1>
	<div class="row justify-content-center">
		<div class="col-md-8">



			<div class="card card-default">
				<div class="card-header">
					Todos: 
				</div>
				<div class="card-body">
					@if(Session::has('update'))	
						<script type="text/javascript">
						           toastr.success('{{Session::get('update')}}', 'Update Notice');            
						  </script>
					@endif

					@if(Session::has('insert'))
					<script type="text/javascript">
						           toastr.success('{{Session::get('insert')}}', 'DB Insert Notice');            
						  </script>
					@endif
					@if(Session::has('delete'))
							<script type="text/javascript">
						           toastr.success('{{Session::get('delete')}}', 'DB Delete Notice');            
						  </script>
					@endif
					<ul class="list-group">
						@php $i=0 @endphp
						@foreach($tasks as $task)
							@php $i++ @endphp
							<li class="list-group-item">@php echo $i."."; @endphp
							{{ $task->name }}
							<a href="{{route('todos.show',$task->id)}}" class="btn btn-danger btn-sm float-right">View</a>
							</li>
							
						@endforeach
					</ul>
				</div>
			</div>


        </div>
	</div>

@endsection
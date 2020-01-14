<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/toastr.min.css')}}">
    <script src="{{asset('public/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/js/toastr.min.js')}}"></script>

</head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light" style="background: #ecf0f1">
  <a class="navbar-brand" href="{{url('/')}}">Todos home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('todos.index')}}">Home <span class="sr-only">(current)</span></a>
      </li>
    
      <li class="nav-item active">
        <a class="nav-link" href="{{route('todos.create')}}">Create Todos <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
            @yield('content')
        </div>
    </body>
</html>
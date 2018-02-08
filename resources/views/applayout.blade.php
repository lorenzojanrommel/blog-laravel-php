<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<!-- jQuery -->
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <!-- Compiled and minified JavaScript -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  	 <!-- material design icons -->
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<title> @yield('title')</title>
	{{-- <script type="text/javascript" src="{{asset('js/sample.js')}}"></script> --}}
</head>
<body>
	<div class="row">
		@include('partials/header')
		@yield('main_content')
	</div>
		@include('partials/footer')
</body>
</html>
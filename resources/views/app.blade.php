<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta id="token" name="token" value="{{ csrf_token() }}">
	<title>Laravel</title>

	<link href="{{ asset('/css/all.css') }}" rel="stylesheet">


</head>
<body>
	@include('partials.nav')
	
	<div class="container">
		@yield('content')
	</div>

	

	<!-- Scripts -->
	<script src="js/vendor/vue.min.js"></script>
	<script src="js/vendor/vue-resource.min.js"></script>
	<script src="js/components/guestbook.js"></script>
	<script src="js/components/dashboard.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<!-- Latest compiled and minified CSS -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="{{ asset('src/css/reset.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('src/css/style.css') }}">
	
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<style type="text/css">
/*nano bar*/
#color, #centered {
	padding: 1em;
	background: #fff;
	float: left;
	width: 50%;
	box-sizing: border-box;
}
#color .nanobar, #centered .nanobar {
	margin-bottom: 2em;
}

#color .nanobar .bar {
	background: red;
	border-radius: 4px;
	box-shadow: 0 0 10px #59d;
	height: 6px;
	margin: 0 auto;
}

</style>

</head>
<body ng-app="app">
	@include('includes.header')
	<div class="container-fluid body">
		@yield('content')
	</div>
	<!-- Latest compiled and minified JavaScript -->
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{ asset('src/js/app.js') }}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script>
      var app = angular.module('app', ['ngMessages']);
</script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.4/angular-messages.min.js"></script>
<script type="text/javascript" src="{{ asset('src/js/jquery.jscroll.min.js') }}"></script>
<script src="{{ asset('src/js/nanobar.js') }}"></script>
<script>
var simplebar = new Nanobar();
simplebar.go(100);
</script>
</body>
</html>
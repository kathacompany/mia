<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="css\style.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Playfair+Display" />
</head>
<body>
	@yield('content')
	<div id="login">
	<a href="/login"><button>Login</button></a>
	</div>
</body>
</html>
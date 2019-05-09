<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css\style.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Playfair+Display" />
</head>
<body>
	@yield('content')
	<div id="login">
	<a href="/login"><button>Login</button></a>
	<a href="/user_profile"><button>User</button></a>
	</div>
</body>
</html>
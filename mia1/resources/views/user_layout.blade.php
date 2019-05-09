<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="css\user_profile_style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css\style.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Playfair+Display" />
</head>
<body style="background-image: url(background1.jpg); background-size: cover; background-attachment: fixed;">
	<div class="row" align="center">
		<div class="column" style="background-color:white;">
			<img src="blank.jpg" width="100px" height="100px">
			<h2>Juan, Dela Cruz</h2>
				<div id="links">
				
				<a class="pointer" href="/user_profile"><img src="house.jpg" width="30px" height="30px"><button>Home</button></a><br>
				<a class="pointer" href="/user_account"><img src="person.jpg" width="30px" height="30px"><button>My Account</button></a><br>
				<a class="pointer" href="/user_orders"><img src="food.jpg" width="30px" height="30px"><button>My Orders</button></a><br>
				<a class="pointer" href="/user_reservations"><img src="phone.jpg" width="30px" height="30px"><button>My Reservations</button></a><br>
				<a class="pointer" href="/user_events"><img src="notes.jpg" width="30px" height="30px"><button>My Events</button></a><br>
				</div>
		</div>
		<div class="column" id="column_table" style="background-color:#ddd;">
			@yield('column2')
		</div>
	</div>
</body>
</html>
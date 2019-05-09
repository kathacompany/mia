@extends('layout')

@section('title')
Log in
@endsection

@section('content')
    <link rel="stylesheet" href="login_style.css"> 
    <body style="background-image: url(1.jpg); background-size: cover; background-attachment: fixed;"></body>
    
    	<div class="login_box">
    		<form>
    			<input type="text" name="username"> Username </input>
    			<input type="password" name="password"> Password </input>
    		</form>

  	  </div>
  	</body>
@endsection

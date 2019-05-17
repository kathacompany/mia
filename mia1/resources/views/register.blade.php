@extends('layout')

@section('title')
Register
@endsection

@section('content')
    <link rel="stylesheet" href="login_style.css"> 
   <style type="text/css">
        body{ font: 20px "Playfair-Display"; background-image: url(web.jpg); background-size: cover; background-attachment: fixed;}
        .reg_box{ width: 250px; padding: 200px; }
    </style>
        <div class="reg_box">
            <form>
                First Name<input type="text" name="name"></input><br>
                Last Name<input type="text" name="name"></input><br>
                Email<br><input type="email" name="email"> </input><br>
                Adress<br><input type="email" name="email"> </input><br>
                Contact<br><input type="email" name="email"> </input><br>
                <label>Classification</label><br>
                <input type="checkbox" name="classification">Owner</input>
                <input type="checkbox" name="classification">Client</input>
                <input type="checkbox" name="classification">Others</input><br>
                <label>Gender</label><br>
                <input type="radio" name="gender">Female</input>
                <input type="radio" name="gender">Male</input>
                <input type="radio" name="gender">Others</input>  
                <input type="submit" value="register"></input>
           </form>
      </div>
    </body>

@endsection
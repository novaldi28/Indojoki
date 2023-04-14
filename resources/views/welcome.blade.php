<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepageUtama</title>
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

</head>

<body>
<div class="wrapper">
    <nav class="navbar">
        <img class = logoo src="image\logooo.png"  width="90" height="50" border-radius = 50%>
        <ul>
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/') }}" class="active" >Home</a></li>
                    <li><a href="{{ url('/shop') }}">Shop</a></li>
                    <li><a href="{{ url('/aboutus') }}">About Us</a></li>
                    <li>
                        <a href="{{route('logout')}}" class="btn btn-primary" id="logincss"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{__('Log Out')}}
                        </a>
                        <form id="logout-form" method="POST" action="{{route('logout')}}" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @else
                    <li><a href="{{ url('/') }}" class="active" >Home</a></li>
                    <li><a href="{{ url('/benefits') }}">Benefits</a></li>
                    <li><a href="{{ url('/listgame') }}">List Games</a></li>
                    <li><a href="{{ url('/aboutus') }}">About Us</a></li>
                    <li><a href="{{ route('login') }}" >Log in</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                @endauth
            @endif
        </ul>
    </nav>
    <div>
        <img class="logo" src="image\PUBG.jpg">
        <popup class = form>
            <div class="center">
                <br>
                <h1>WELCOME TO JOKINDO!</h1><br>
                <h1>Jasa Joki Games </h1>
                <h1>Terbaik </h1>
            </div>
    </div>

</div>

</body>
</Html>

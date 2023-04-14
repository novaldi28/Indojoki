<!DOCTYPE html>
<html>
<head>
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link rel="stylesheet" href="../css/aboutus.css">

</head>

<body>
<div class="wrapper">
    <nav class="navbar"><img class = logoo src="image\logooo.png"  width="90" height="50" border-radius = 50%>
        <ul>
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/') }}"  >Home</a></li>
                    <li><a href="{{ url('/shop') }}">Shop</a></li>
                    <li><a href="{{ url('/aboutus') }}" class="active">About Us</a></li>
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
                    <li><a href="{{ url('/') }}"  >Home</a></li>
                    <li><a href="{{ url('/benefits') }}">Benefits</a></li>
                    <li><a href="{{ url('/listgame') }}">List Games</a></li>
                    <li><a href="{{ url('/aboutus') }}" class="active" >About Us</a></li>
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
                <center>
                    <h2></h2>

                </center>
                <br>
                <h1> About Us</h1><br>
                <h3>
                    Selamat datang di website jasa joki game kami!
                    Kami adalah tim profesional yang siap membantu Anda mencapai tujuan dalam bermain game. Dengan pengalaman dan keahlian yang kami miliki, kami menawarkan layanan joki game yang aman, cepat, dan terpercaya.
                    Kami menyediakan layanan joki game untuk berbagai jenis game populer, mulai dari MOBA, FPS, battle royale, hingga game mobile. Tim joki game kami akan membantu Anda untuk meningkatkan peringkat dan keterampilan dalam bermain game.
                    Kami juga mengutamakan keamanan dan privasi data pelanggan kami. Seluruh layanan joki game yang kami tawarkan dilakukan dengan cara yang aman dan legal.
                </h3>
            </div>
        </popup>

    </div>
</div>


</body>
</Html>

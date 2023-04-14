<!DOCTYPE html>
<html>
<head>
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="../css/shop.css">

</head>

<body>
<div class="wrapper">
    <nav class="navbar">
        <img class = logoo src="\image\logooo.png"  width="90" height="50" border-radius = 50%>
        <ul>
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/') }}" >Home</a></li>
                    <li><a href="{{ url('/shop') }}" class="active" >Shop</a></li>
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
        <br>
        <br>
        <h1>Produk</h1>
        <div class = grid-container>
            <table cellspacing="20">
                <tr>
                    @foreach($game as $game)
                        <th>
                            <ol>
                                <center>
                                    <h2></h2>
                                    <img src="game/{{$game->gambar}}"  width="350" height="175" border-radius = 50% style="margin-top: 60px">
                                </center>
                                <a href="{{url('detail_games', $game->id)}}">{{$game->nama_game}}</a>
                                <h5>{{$game->harga}} per Rank</h5>
                            </ol>
                        </th>
                    @endforeach
                </tr>
            </table>
        </div>
    </div>
</div>

</body>
</Html>

<!DOCTYPE html>
<html>
<head>
    <base href="/public">

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepageUtama</title>
    <link rel="stylesheet" href="/css/description.css">

</head>

<body>
<div class="wrapper">
    <nav class="navbar">
        <img class = logoo src="/image/logooo.png"  width="90" height="50" border-radius = 50%>
        <ul>
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/') }}" >Home</a></li>
                    <li><a href="{{ url('/shop') }}"  >Shop</a></li>
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


    <div class="deskripsi" style="margin: auto; width: 50%; padding: 30px">
        <ol>
            <center>
                <h2></h2>
                <img src="game/{{$game->gambar}}"  width="800" height="500" border-radius = 50% style="padding: 10px">
            </center>
            <center>
                <a class ="joni" href="{{url('detail_games', $game->id)}}" style="text-align: center">{{$game->nama_game}}</a>
            </center>

            <h5>{{$game->harga}} / Rank</h5>
            <div class="pesan">
                <form action="{{url('tambah_pesanan', $game->id)}}" method="Post">

                    @csrf
                    <div class="row">

                        <div class="col-md-4">

                            <input type="number" name="naik_rank" value="1" min="1" style="width: 778px" style="text-align: center" >

                        </div>

                        <div class="col-md-4">
                            <input type="submit" value="Tambah ke Pesanan" href="{{ url('/pembayaran') }}">
                        </div>

                        <div class="tombol">
                            <a href="{{ url('/pembayaran') }}" >Lanjutkan Bayar</a>
                        </div>


                    </div>
                </form>
            </div>

        </ol>

    </div>
</div>



</body>
</Html>

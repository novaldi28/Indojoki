<!DOCTYPE html>
<html>
<head>
    </style>
    <meta charset="utf-8">
    <title>ML</title>
    <link rel="stylesheet" href="../css/pembayaran.css">
</head>

<body>
    <div class="wrapper">
		<nav class="navbar">
            <img class = logoo src="\image\logooo.png"  width="90" height="50" border-radius = 50%>
            <ul>
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/') }}" >Home</a></li>
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
		</nav>
    <div>
    <section>
        <popup class = form>
            <div class="center">
                <br>
                <h2 class="heading">Pembayaran</h2>
                <br>

                <br>
                <table cellspacing="20"  class="total" style="margin-right: 10px" >
                    <tr class="penamaan">
                        <th style="color: #0c95e8">Nama Game</th>
                        <th style="color: #0c95e8">Total Naik Rank</th>
                        <th style="color: #0c95e8" >Total Pembayaran</th>
                    </tr>
                    @foreach ($pesanan as $pesanan)
                        <tr class="penamaan">
                            <th>{{$pesanan->nama_game}}</th>
                            <th>{{$pesanan->naik_rank}}</th>
                            <th>{{$pesanan->harga}}</th>
                        </tr>
                    @endforeach

                </table>
                <br>
                <br>
                <br>
                <div class="back">
                    <a href="{{ url('/finish') }}">Bayar</a>
                </div>
            </div>
    </div>
            </section>
        </div>
    </div>


</body>
</Html>

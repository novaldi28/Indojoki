<!DOCTYPE html>
<html>
<head>
    </style>
    <meta charset="utf-8">
    <title>ML</title>
    <link rel="stylesheet" href="../css/description.css">

</head>

<body>
    <div class="wrapper">
		<nav class="navbar">
            <img class = logoo src="\image\logooo.png"  width="90" height="50" border-radius = 50%>
            <ul>
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/') }}" >Home</a></li>
                        <li><a href="{{ url('/shop') }}" >Shop</a></li>
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
    <section>
        <popup class = form>
            <div class="center">
                <h1> Valorant</h1><br>
                <img class="logo" src="\image\Valorant.webp">
                    <br>
                    <div class="deskripsi">
                        <h2> Deskripsi </h2>
                        <li>Valorant adalah game online first-person shooter (FPS) taktis yang dimainkan oleh dua tim beranggotakan lima pemain.</li>
                        <li>Tujuan dari permainan ini adalah menyelesaikan misi atau mengeliminasi seluruh tim lawan.</li>
                        <li>Setiap pemain memilih agen yang memiliki kemampuan unik dan memainkan peran khusus dalam tim.
                        </li>
                        <li>Pertandingan biasanya terdiri dari beberapa putaran dan berakhir ketika salah satu tim mencapai jumlah kemenangan yang ditentukan.
                        </li>
                    </div>
                    <div class="rank">
                        <h2> Rank : </h2>
                        <li>Iron</li>
                        <li>Bronze</li>
                        <li>Silver</li>
                        <li>Gold</li>
                        <li>Platinum</li>
                        <li>Diamond</li>
                        <li>Master</li>
                        <li>Ascendant</li>
                        <li>Immortal</li>
                        <li>Radiant ( Valorant )</li>
                    <br>
                    <div class="form-element"style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                        <button style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" onclick="document.location='{{ url('/pembayaran') }}'"  >Beli Sekarang</button>
                    </div>
            </div>
    </section>

    </div>

	</div>

</body>
</Html>

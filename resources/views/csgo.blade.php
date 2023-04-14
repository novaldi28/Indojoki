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
                <h1> CS : GO</h1><br>
                <img class="logo" src="\image\CS GO.jpg">
                    <br>
                    <div class="deskripsi">
                        <h2> Deskripsi </h2>
                        <li>CS:GO (Counter-Strike: Global Offensive) adalah game online first-person shooter (FPS) taktis yang dimainkan oleh dua tim beranggotakan lima pemain.</li>
                        <li>Tujuan dari permainan ini adalah menyelesaikan misi atau mengeliminasi seluruh tim lawan.</li>
                        <li>Setiap pemain memilih tim yang memiliki kemampuan dan senjata khusus yang berbeda.
                        </li>
                        <li>Pemain dapat membeli senjata dan item untuk meningkatkan kemampuan mereka selama pertandingan.</li>
                        <li>Pertandingan terdiri dari beberapa putaran dan berakhir ketika salah satu tim mencapai jumlah kemenangan yang ditentukan.
                        </li>
                    </div>
                    <div class="rank">
                        <h2> Rank : </h2>
                        <li>Silver I, Silver II, Silver III, Silver IV, Silver Elite, Silver Elite Master</li>
                        <li>Gold Nova I, Gold Nova II, Gold Nova III, Gold Nova Master</li>
                        <li>GMaster Guardian I, GMaster Guardian Ii, Master Guardian Elite</li>
                        <li>Distinguished Master Guardian</li>
                        <li>Legendary Eagle</li>
                        <li>Legendary Eagle Master</li>
                        <li>Supreme Master First Class</li>
                        <li>Global Elite</li>
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

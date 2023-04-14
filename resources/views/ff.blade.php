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
    <section>
        <popup class = form>
            <div class="center">
                <h1>Free Fire</h1><br>
                <img class="logo" src="\image\ff.jpg">
                    <br>
                    <div class="deskripsi">
                        <h2> Deskripsi </h2>
                        <li>Free Fire adalah game online battle royale yang dimainkan oleh 50 pemain secara individu atau dalam tim kecil</li>
                        <li>Tujuan dari game Free Fire adalah untuk menjadi pemain terakhir yang bertahan hidup di sebuah pulau yang semakin menyempit.
                        </li>
                        <li>Game ini memungkinkan pemain untuk bermain melawan 49 pemain lainnya dalam pertempuran untuk menjadi satu-satunya pemain yang bertahan hidup

                        </li>
                        <li>Setiap pertandingan berlangsung sekitar 10 menit, di mana pemain harus mengumpulkan senjata, amunisi, dan peralatan, serta menghindari zona berbahaya yang semakin mempersempit wilayah tempat bertanding

                        </li>
                    </div>
                    <div class="rank">
                        <h2> Rank : </h2>
                        <li>Bronze</li>
                        <li>Silver</li>
                        <li>Gold</li>
                        <li>Platinum</li>
                        <li>Diamond</li>
                        <li>Heroic</li>
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

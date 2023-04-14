<!DOCTYPE html>
<html>
<head>
    </style>
    <meta charset="utf-8">
    <title>Deskripsi</title>
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
    <div>
    <section>
        <popup class = form>
            <div class="center">
                <h1>PUBG</h1><br>
                <img class="logo" src="\image\PUBG.jpg">
                    <br>
                    <div class="deskripsi">
                        <h2> Deskripsi </h2>
                        <li>PUBG (PlayerUnknown's Battlegrounds) adalah game online battle royale yang dimainkan oleh 100 pemain secara individu atau dalam tim kecil.
                        </li>
                        <li>Tujuan dari permainan ini adalah menjadi satu-satunya pemain atau tim yang selamat di akhir pertandingan dengan membunuh pemain lain dan menghindari wilayah yang terus menyusut.
                        </li>
                        <li>Pemain memulai permainan dengan tanpa senjata atau perlengkapan dan harus mencari senjata, amunisi, dan perlengkapan untuk bertahan hidup.
                        </li>
                        <li>Selama pertandingan, pemain harus berhati-hati dan menghindari serangan dari pemain lain.
                        </li>
                        <li>Pertandingan biasanya berlangsung selama 30 hingga 40 menit, tergantung pada berapa lama pemain bertahan hidup.

                        </li>
                    </div>
                    <div class="rank">
                        <h2> Rank : </h2>
                        <li>Bronze</li>
                        <li>Silver</li>
                        <li>Gold</li>
                        <li>Platinum</li>
                        <li>Diamond</li>
                        <li>Master</li>
                    </div>
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

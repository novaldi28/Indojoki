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
                <h4>Silahkan pilih Rank, Quantity, dan Jenis Pembayaran</h4>
                <br>
                <div class="services-container">
                    <div class="dropdown">
                        <div class="container">
                            <button class="dropbtn">Rank Awal</button>
                            <div class="dropdown-content">
                                <a href="#">Link 1</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-container">
                    <div class="dropdown">
                        <div class="container">
                            <button class="dropbtn">Quantity</button>
                            <div class="dropdown-content">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <a href="#">5</a>
                                <a href="#">6</a>
                                <a href="#">7</a>
                                <a href="#">8</a>
                                <a href="#">9</a>
                                <a href="#">10</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-container">
                    <div class="dropdown">
                        <div class="container">
                            <button class="dropbtn">Jenis Pembayaran</button>
                            <div class="dropdown-content">
                                <a href="#">Bank BCA</a>
                                <a href="#">Bank BRI</a>
                                <a href="#">Bank Mandiri</a>
                                <a href="#">ShopeePay</a>
                                <a href="#">Gopay</a>
                                <a href="#">Dana</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="back">
                    <a href="{{ url('/shop') }}">Back</a>
                </div>
            </div>
    </div>
            </section>
        </div>
    </div>


</body>
</Html>

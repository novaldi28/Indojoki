<!DOCTYPE html>
<html>
<head>
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benefits</title>
    <link rel="stylesheet" href="../css/benefits.css">

</head>

<body>
<div class="wrapper">
    <nav class="navbar">
        <img class = logoo src="\image\logooo.png"  width="90" height="50" border-radius = 50%>
        <ul>
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/') }}" >Home</a></li>
                    <li><a href="{{ url('/benefits') }}"class="active" >Benefits</a></li>
                    <li><a href="{{ url('/listgame') }}">List Games</a></li>
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
                    <li><a href="{{ url('/') }}" >Home</a></li>
                    <li><a href="{{ url('/benefits') }}"  class="active" >Benefits</a></li>
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
        <div class = "grid-container">
            <h1>Benefits</h1>
            <br>
            <table cellspacing="30">
                <tr>
                    <th>
                        <ol>
                            <center>
                                <h2></h2>
                                <img src="\image\tas.png"  width="50" height="50" border-radius = 50%>
                            </center>
                            <h4>Our Job</h4>
                        </ol>
                    </th>
                    <th>
                        <ol>
                            <center>
                                <h2></h2>
                                <img src="\image\rumah.png"   width="50" height="50" border-radius = 50%>
                            </center>
                            <h4>Work From Home</h4>
                        </ol>
                    </th>
                    <th>
                        <ol><center>
                                <h2></h2>
                                <img src="\image\jam.png"   width="50" height="50" border-radius = 50%>
                            </center>
                            <h4>Faster Process</h4>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th>
                        <ol>
                            <center>
                                <h2></h2>
                                <img src="\image\lock.png"   width="50" height="50" border-radius = 50%>
                            </center>
                            <h4>Guaranteed Security</h4>
                        </ol>
                    </th>
                    <th>
                        <ol>
                            <center>
                                <h2></h2>
                                <img src="\image\headphone.png"   width="50" height="50" border-radius = 50%>
                            </center>
                            <h4>We Listen and Record Requests</h4>
                        </ol>
                    </th>
                    <th>
                        <ol>
                            <center>
                                <h2></h2>
                                <img src="\image\humy.png"   width="50" height="50" border-radius = 50%>
                            </center>
                            <h4>Buyer's Rights</h4>
                        </ol>
                    </th>
                </tr>

            </table>
        </div>
    </div>
</div>

</body>
</Html>

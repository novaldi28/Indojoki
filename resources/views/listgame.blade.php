<!DOCTYPE html>
<html>
<head>
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Games</title>
    <link rel="stylesheet" href="../css/listgame.css">

</head>

<body>
<div class="wrapper">
    <nav class="navbar">
        <img class = logoo src="\image\logooo.png"  width="90" height="50" border-radius = 50%>
        <ul>
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/benefits') }}">Benefits</a></li>
                    <li><a href="{{ url('/listgame') }}" class="active">List Games</a></li>
                    <li><a href="{{ url('/aboutus') }}">About Us</a></li>
                    <li>
                        <a href="{{route('logout')}}" class="btnn btn-primary" id="logincss"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{__('Log Out')}}
                        </a>
                        <form id="logout-form" method="POST" action="{{route('logout')}}" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @else
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/benefits') }}">Benefits</a></li>
                    <li><a href="{{ url('/listgame') }}" class="active">List Games</a></li>
                    <li><a href="{{ url('/aboutus') }}">About Us</a></li>
                    <li><a href="{{ route('login') }}" >Log in</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                @endauth
            @endif
        </ul>
    </nav>
    <section class="services" id="services">
        <h2 class="heading">List <span>Games</span></h2>

        <div class="services-container">
            <div class="services-box">
                <i class='bx bx-code-alt' ></i>
                <h3>Mobile Legend</h3>
                <center>
                    <h2></h2>
                    <img src="\image\Mobile legend.jpg"  width="400" height="200" border-radius = 50%>
                </center>
                <br>
                <div class="deskripsi">
                    <h2> Deskripsi </h2>
                    <li>Mobile Legends: Bang Bang (MLBB) adalah game MOBA mobile yang dimainkan secara tim.</li>
                    <li>Pemain dapat memilih dari berbagai kelas karakter, seperti Marksman, Assassin, Tank, Mage, dan Fighter.</li>
                    <li>Tujuan utama dalam game ini adalah menghancurkan basis tim lawan.</li>
                    <li>Mode permainan yang tersedia: Classic, Rank, Brawl, atau VS AI.</li>
                </div>
                <a href="{{ route('login') }}" class="btn">Lebih Lanjut</a>
            </div>
            <div class="services-box">
                <i class='bx bx-paint-roll' ></i>
                <h3>PUBG</h3>
                <center>
                    <h2></h2>
                    <img src="\image\PUBG.jpg"   width="400" height="200" border-radius = 50%>
                </center>
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
                <a href="{{ route('login') }}" class="btn">Lebih Lanjut</a>
            </div>
            <div class="services-box">
                <i class='bx bx-store-alt' ></i>
                <h3>CS : GO</h3>
                <center>
                    <h2></h2>
                    <img src="\image\CS GO.jpg"   width="400" height="200" border-radius = 50%>
                </center>
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
                <a href="{{ route('login') }}" class="btn">Lebih Lanjut</a>
            </div>
            <div class="services-box">
                <i class='bx bx-code-alt' ></i>
                <h3>Valorant</h3>
                <center>
                    <h2></h2>
                    <img src="\image\Valorant.webp"   width="400" height="200" border-radius = 50%>
                </center>
                <div class="deskripsi">
                    <h2> Deskripsi </h2>
                    <li>Valorant adalah game online first-person shooter (FPS) taktis yang dimainkan oleh dua tim beranggotakan lima pemain.</li>
                    <li>Tujuan dari permainan ini adalah menyelesaikan misi atau mengeliminasi seluruh tim lawan.</li>
                    <li>Setiap pemain memilih agen yang memiliki kemampuan unik dan memainkan peran khusus dalam tim.
                    </li>
                    <li>Pertandingan biasanya terdiri dari beberapa putaran dan berakhir ketika salah satu tim mencapai jumlah kemenangan yang ditentukan.
                    </li>
                </div>
                <a href="{{ route('login') }}" class="btn">Lebih Lanjut</a>
            </div>
            <div class="services-box">
                <i class='bx bx-paint-roll' ></i>
                <h3>Apex Legend</h3>
                <center>
                    <h2></h2>
                    <img src="\image\ApexLegends.jpg"   width="400" height="200" border-radius = 50%>
                </center>
                <div class="deskripsi">
                    <h2> Deskripsi </h2>
                    <li>Apex Legends adalah game online battle royale yang dimainkan oleh 20 tim beranggotakan tiga pemain.
                    </li>
                    <li>Tujuan dari permainan ini adalah menjadi tim terakhir yang bertahan hidup di akhir pertandingan dengan membunuh pemain lain dan menghindari wilayah yang terus menyusut.
                    </li>
                    <li>Setiap pemain memilih karakter yang memiliki kemampuan unik dan dapat membeli senjata/item untuk meningkatkan kemampuan mereka selama pertandingan.
                    </li>
                    <li>Selama pertandingan, pemain harus berhati-hati dan memperhatikan lingkungan sekitar untuk menghindari serangan dari pemain lain.
                    </li>
                    <li>Pertandingan biasanya berlangsung selama 20 hingga 30 menit, tergantung pada berapa lama tim bertahan hidup.

                    </li>
                </div>
                <a href="{{ route('login') }}" class="btn">Lebih Lanjut</a>
            </div>
            <div class="services-box">
                <i class='bx bx-store-alt' ></i>
                <h3>Dota 2</h3>
                <center>
                    <h2></h2>
                    <img src="\image\Dota2.jpg"   width="400" height="200" border-radius = 50%>
                </center>
                <div class="deskripsi">
                    <h2> Deskripsi </h2>
                    <li>Dota 2 adalah sebuah game online multiplayer battle arena (MOBA) yang dimainkan oleh dua tim beranggotakan lima pemain.
                    </li>
                    <li>Tujuan game ini menghancurkan markas(base) musuh di sisi lain peta, sambil melindungi markas sendiri.
                    </li>
                    <li>Setiap pemain memilih hero dan memainkan peran khusus dalam tim.
                    </li>
                    <li>Pemain dapat meningkatkan level hero mereka dan membeli item untuk meningkatkan kemampuan.</li>
                    <li>Pertandingan biasanya berlangsung selama 30 hingga 60 menit, tergantung pada strategi dan keahlian masing-masing tim.</li>
                    </li>
                </div>
                <a href="{{ route('login') }}" class="btn">Lebih Lanjut</a>
            </div>
            <div class="services-box">
                <i class='bx bx-code-alt' ></i>
                <h3>League of Legends</h3>
                <center>
                    <h2></h2>
                    <img src="\image\LOL.jpg"   width="400" height="200" border-radius = 50%>
                </center>
                <br>
                <div class="deskripsi">
                    <h2> Deskripsi </h2>
                    <li>League of Legends (LoL) adalah game online multiplayer battle arena (MOBA) yang dimainkan oleh dua tim beranggotakan lima pemain.
                    </li>
                    <li>Tujuan dari permainan ini adalah menghancurkan Nexus musuh di sisi lain peta, sambil melindungi Nexus sendiri.</li>
                    <li>Setiap pemain memilih champion yang memiliki kemampuan unik.
                    </li>
                    <li>Pemain dapat meningkatkan level champion mereka dan membeli item untuk meningkatkan kemampuan mereka
                    </li>
                    <li>Pertandingan biasanya berlangsung selama 20 hingga 50 menit, tergantung pada strategi dan keahlian masing-masing tim.
                    </li>
                </div>
                <a href="{{ route('login') }}" class="btn">Lebih Lanjut</a>
            </div>
            <div class="services-box">
                <i class='bx bx-paint-roll' ></i>
                <h3>Free Fire</h3>
                <center>
                    <h2></h2>
                    <img src="\image\ff.jpg"   width="400" height="200" border-radius = 50%>
                </center>
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
                <a href="{{ route('login') }}" class="btn">Lebih Lanjut</a>
            </div>
        </div>

    </section>
</div>
</body>

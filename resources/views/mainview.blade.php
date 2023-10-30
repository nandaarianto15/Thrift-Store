@extends('layout.main')

@section('container')

{{-- caraousel item --}}
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset("img/slideimg/slideshow1.png") }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset("img/slideimg/slideshow2.png") }}" class="d-block w-100" alt="...">
        </div>    
        <div class="carousel-item">
            <img src="{{ asset("img/slideimg/slideshow3.png") }}" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    
    {{-- man collection canvas --}}
    <div id="lpman">
        <p class="koleksipria">KOLEKSI PRIA</p>
        <img src="{{ asset("svg/shapes1.svg") }}" alt="" style="width: 100%; height: 1002px; top:780px">
        <img src="{{ asset("img/koleksi/koleksipria.png") }}" class="imgpria" alt="" style="position: absolute; width: 930px; height: 480px; left: 200px; top: 1070px;">
        <p class="lptman">Bahan bekas yang berkualitas.</p>
        <p class="lttman">Gunakan idemu dalam stylish</p>
        <a href="/pria"><button type="button" class="btn btn-light" id="btnman" style="font-family: Noto Sans">Belanja Sekarang</button></a>
    </div>

    {{-- girl collection canvas --}}
    <div id="lpgirl">
        <p class="koleksiwanita">KOLEKSI WANITA</p>
        
        <img src="{{ asset("svg/Ellipse 3.svg") }}" alt="" style=" position:absolute;width: 510px; height: 1085px; top: 2337px;">
        <img src="{{ asset("svg/shapes2.svg") }}" alt="" style="width: 100%; height: 600px; top: 2337px; padding-top:230px">
        <img src="{{ asset("img/koleksi/koleksiwanita.png") }}" alt="" style="position: absolute; width: 930px; height: 580px; left: 200px; top: 2080px; padding-bottom: 100px">
        <p class="lptgirl">Kenyamanan beperforma tinggi dalam gaya terbaru.</p>
        <p class="lttgirl">Busana yang elegan</p>
        <a href="/wanita"><button type="button" class="btn btn-light" id="btngirl" style="font-family: Noto Sans">Belanja Sekarang</button></a>
    </div>

    <div>
        <div style="position: absolute; color:#212121"><br>
            <h2>test</h2><h2>test</h2><h2>test</h2><h2>test</h2><h2>test</h2><h1>test</h1><h2>test</h2><h2>test</h2>
            <h2 id="lptkid">test</h2>
            <img src="{{ asset("svg/Ellipse 5.svg") }}" alt="" style=" width: 1348px; height: 1245px; top: 2337px; padding-left:550px;">
        </div>

    {{-- kid collection canvas --}}
        <p class="koleksianak">KOLEKSI ANAK-ANAK</p>
        <img src="{{ asset("svg/Ellipse 4.svg") }}" alt="" style=" width: 630px; height: 870px; top: 2337px;">
        <img src="{{ asset("svg/Ellipse 1.svg") }}" alt="" style="left:633px; position:absolute; width: 716px; height: 990px; top: 3130px;">
        <img src="{{ asset("img/koleksi/koleksianak.png") }}" alt="" style="position: absolute; width: 930px; height: 580px; left: 200px; top: 3080px; padding-bottom: 100px">
        <p class="lptkid">Bahan bekas dengan tampilan yang premium.</p>
        <p class="lttkid">Tampil dengan senyuman</p>
        <a href="/anak"><button type="button" class="btn btn-light" id="btnkid" style="font-family: Noto Sans">Belanja Sekarang</button></a>
    </div>

    <div >
        <div style="text-align: right;">
            <h2>p</h2><h2>p</h2><h2>p</h2><h2>p</h2><h2>p</h2><h2>p</h2><h2>p</h2><h2>p</h2><h2>p</h2><h2>p</h2><h2>p</h2><h4>p</h4>
            <h2 id="lptbaby">p</h2>
        </div>
    
    {{-- baby collection canvas --}}
        <p class="koleksibayi">KOLEKSI BAYI</p>
        <img src="{{ asset("svg/Ellipse 3.svg") }}" alt="" style="position:absolute; width: 716px; height: 990px; top: 4000px;">
        <img src="{{ asset("img/koleksi/koleksibayi.png") }}" alt="" style="position: absolute; width: 930px; height: 580px; left: 200px; top: 4075px; padding-bottom: 100px">
        <a href="/bayi"><button type="button" class="btn btn-light" id="btnbaby" style="font-family: Noto Sans">Belanja Sekarang</button></a>
        <img src="{{ asset("svg/Ellipse 6.svg") }}" alt="" style="width: 845px; height: 1100px; top: 2337px;">
    </div>


{{-- <div style="color: #dadada">
    <h2>p</h2><h2>p</h2><h2>p</h2><h2>p</h2><h2>p</h2><h2>p</h2><h2>p</h2><h2>p</h2><h2>p</h2><h2>p</h2><h2>p</h2><h2>p</h2><h2>p</h2><h2>p</h2><h2>p</h2>
</div> --}}



    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        {{ __('You are logged in!') }}
    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="navbar-nav ms-auto">
                       
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul> --}}
</body>
</html>

<script>
    const toTop = document.querySelector(".to-top");
    
    window.addEventListener("scroll", () => {
        if (window.pageYOffset > 100) {
            toTop.classList.add("active");
        } else {
            toTop.classList.remove("active");
        }
    })
</script>
            
@endsection
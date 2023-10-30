<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/css/mainview.css") }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>    <link rel="icon" href="{{ asset("img/Pink_Typography_Swash_Letter_NO_Logo-removebg-preview (1) 3.png") }}">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
    {{-- <script type="text/javascript" src="{{ asset("js/mainview.js") }}"></script> --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="{{ asset('css/css/sidebar.css') }}">
    <script src="https://kit.fontawesome.com/a54d2cbf95.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <title>Thrift House</title>
</head>

<style>
    .logo {
        width: 260px;
        height: 120px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        padding-bottom: 10px;
        padding-top: 0px
    }

    body {
        background-color: #dadada
    }
</style>

<body>
    <div class="test">
        <a class="navbar-brand" href="#">
            <div class="top-text" style="color: white; text-align: right;">
            <p>
                {{-- <a href="{{ route('login') }}" class="login" style="color: white; text-decoration: none; padding: 10px">Login/Register</a>        --}}
                <a href="/about" class="about" style="color: #212121; text-decoration: none; padding: 25px;">About Us</a>
            </p>
            </div>
            <a href="/home"><img class="logo" src="{{ asset("img/wow.png") }}" alt=""></a>
        </a><br>
    </div>

    <nav class="navbar navbar-expand-sm justify-content-center sticky-top"  id="gender">
        <ul class="navbar-nav">
    
            {{-- Navbar text --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ url('pria') }}" id="pria">Pria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('wanita') }}" id="wanita">Wanita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('anak-anak') }}" id="anak">Anak-Anak</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('bayi') }}" id="bayi">Bayi</a>
            </li>
        </ul>
    
        {{-- logo in navbar --}}
        <div style="position: absolute; left: 1220px; top: 15px;">
            {{-- <a href=""><img src="{{ asset("img/fav.png") }}" alt="" style="position: absolute; left: -100px; top: 14px;"></a> --}}
            <a href="{{ url('check-out') }}"><img src="{{ asset("img/cart.png") }}" alt="" style="position: absolute; left: -80px; top: 14px;"></a>
            <a href="{{ url('profile') }}"><img src="{{ asset("img/user.png") }}" alt="" style="position: absolute; left: -5px; top: 13px;"></a>
        </div>
    </nav> 
    
    <div class="container">
        
        <div class="row" style="margin-top: 10%; margin-bottom:10%">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3><i class="fa fa-user mb-3"> My Profile</i></h3>
                        <h5 class="mb-3">Your last QR and unique code -> <a href="{{ url('qr/{id}') }}">here</a></h5>
                        <h5>Your shopping -> <a href="{{ url('shop') }}">here</a></h5><br>
                        <div style="position:absolute; top:10px; right:35px;">
                            <a href="{{ route('logout') }}" style="color:#212121;"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
    
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td>No HP</td>
                                    <td>:</td>
                                    <td>{{ $user->nohp }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{ $user->alamat }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="fa fa-pencil-alt"> Edit Profile</i></h4><br>
                        <form method="POST" action="{{ url('profile') }}">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="name" class="col-md-2 col-form-label text-md-end">{{ __('Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name}}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="email" class="col-md-2 col-form-label text-md-end">{{ __('Email Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email}}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="nohp" class="col-md-2 col-form-label text-md-end">No HP</label>
    
                                <div class="col-md-6" id="staticParent">
                                    <input id="nohp" type="text" maxlength="13" onkeypress="return hanyaAngka(event)" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ $user->nohp}}" required autocomplete="nohp" autofocus/>
                                    
                                    <script>
                                        function hanyaAngka(event) {
                                        var angka = (event.which) ? event.which : event.keyCode
                                        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                                        return false;
                                        return true;
                                    }
                                    </script>

                                    <style>
                                        input::-webkit-outer-spin-button,
                                        input::-webkit-inner-spin-button {
                                        -webkit-appearance: none;
                                        margin: 0;
                                        }
                                    </style>

                                    @error('nohp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="Alamat" class="col-md-2 col-form-label text-md-end">{{ __('Alamat') }}</label>
    
                                <div class="col-md-6">
                                    {{-- <input id="Alamat" type="text" class="form-control @error('Alamat') is-invalid @enderror" name="Alamat" value="{{ $user->Alamat}}" required autocomplete="Alamat" autofocus> --}}
                                    <textarea name="alamat" for="alamat" class="form-control @error('alamat')
                                        is-invalid
                                    @enderror" required="">{{ $user->alamat }}</textarea>
    
                                    @error('Alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password" class="col-md-2 col-form-label text-md-end">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-2 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                </div>
                            </div>
    
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-2">
                                    <button type="submit" class="btn btn-primary">
                                       Save
                                    </button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    
        @include('sweetalert::alert')
        
    
        <a href="#" class="to-top">
            <i class="fas fa-chevron-up"></i>
        </a>
    
    </div>
    
        
</body>
    
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
</html>
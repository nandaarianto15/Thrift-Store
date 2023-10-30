<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/css/login.css') }}">
    <script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
    <link rel="icon" href="{{ asset('img/Pink_Typography_Swash_Letter_NO_Logo-removebg-preview (1) 3.png') }}">
    <title>Thrift House</title>
    <style>
        .img1 {
        position: absolute;
        width: 500px;
        height: 500px;
        left: 708px;
        top: 194px;
        }

        .panah {
            position: absolute;
            top: 10px;
            left: 10px;

        }
    </style>
</head>
<body>
    <div class="container" id="container">
        
        {{-- Create account canvas --}}
        <div class="form-container sign-up-container">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <a href="/"><img src="{{ asset("svg/arrow-left-circle.svg") }}" alt="" class="panah"></a>
                <h1>Create Account</h1><br>
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <br>
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </form>
        </div>

        {{-- Sign in canvas --}}
        <div class="form-container sign-in-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <a href="/"><img src="{{ asset("svg/arrow-left-circle.svg") }}" alt="" class="panah"></a>
                <h1>Sign in</h1>
                <div class="social-container"></div>
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                    
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
            </form>
        </div>

        {{-- button transform --}}
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <img src="{{ asset('img/Pink_Typography_Swash_Letter_NO_Logo-removebg-preview (1) 3.png') }}">
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <img src="{{ asset('img/Pink_Typography_Swash_Letter_NO_Logo-removebg-preview (1) 3.png') }}">
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
</html>
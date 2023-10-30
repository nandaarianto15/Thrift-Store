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
    <link rel="stylesheet" href="{{ asset('css/css/sidebar.css') }}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
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
    {{-- nav logo --}}
<div class="test">
    <a class="navbar-brand" href="#">
        <div class="top-text" style="color: white; text-align: right;">
        <p>
            {{-- <a href="/login" class="login" style="color: white; text-decoration: none; padding: 10px">Login/Register</a>        --}}
            <a href="/about" class="about" style="color: #212121; text-decoration: none; padding: 25px;">About Us</a>
        </p>
        </div>
        <a href="/home"><img class="logo" src="{{ asset("img/wow.png") }}" alt=""></a>
    </a><br>
</div>

@include('partials.navproduk')



    @yield('container')

    @include('sweetalert::alert')


@include('partials.footer')
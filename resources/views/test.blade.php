<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset("css/css/mainview.css") }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm justify-content-center sticky-top"  id="gender">
        <ul class="navbar-nav">
            <li class="nav-item" id="menu">
                <a class="nav-link" href="#lpman" id="ats">ATASAN</a>
                    <ul class="ani-menu">
                        <li><a href="#">Kaos</a></li>
                        <li><a href="#">Polo</a></li>
                        <li><a href="#">Sweater</a></li>
                        <li><a href="#">Kemeja</a></li>
                    </ul>
            </li>
            <li class="nav-item" id="menu">
                <a class="nav-link" href="#lpgirl" id="out">OUTWEAR</a>
                    <ul class="ani-menu">
                        <li><a href="#">Hoodie</a></li>
                        <li><a href="#">Boomber</a></li>
                        <li><a href="#">Varsity</a></li>
                    </ul>
            </li>
            <li class="nav-item" id="menu">
                <a class="nav-link" href="#lptkid" id="bot">CELANA</a>
                    <ul class="ani-menu">
                        <li><a href="#">Jeans</a></li>
                        <li><a href="#">Chino</a></li>
                        <li><a href="#">SweatPants</a></li>
                        <li><a href="#">Ankle</a></li>
                        <li><a href="#">Cargo</a></li>
                    </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#lptbaby" id="">SPORT</a>
            </li>
        </ul>
        <div style="position: absolute; left: 1220px; top: 15px;">
            <a href=""><img src="{{ asset("img/fav.png") }}" alt="" style="position: absolute; left: -100px; top: 14px"></a>
            <a href=""><img src="{{ asset("img/cart.png") }}" alt="" style="position: absolute; left: -50px; top: 14px;"></a>
            <a href=""><img src="{{ asset("img/user.png") }}" alt="" style="position: absolute;  left: -5px; top: 13px"></a>
        </div>
    </nav> 

    {{-- <nav>
        <ul>
            <li class="menu"><a href="#">ATASAN</a>
                <ul class="ani-menu">
                    <li><a href="#">Kaos</a></li>
                    <li><a href="#">Polo</a></li>
                    <li><a href="#">Sweater</a></li>
                    <li><a href="#">Kemeja</a></li>
                </ul>
            </li>
            <li class="menu"><a href="#">OUTWEAR</a></li>
            <li class="menu"><a href="#">CELANA</a></li>
            <li class="menu"><a href="#">SPORT</a></li>
        </ul>
    </nav> --}}
</body>
</html>
<nav class="navbar navbar-expand-sm justify-content-center sticky-top"  id="gender">
    
    {{-- navbar product name --}}
    <ul class="navbar-nav">

        {{-- produk categories name --}}
        <li class="nav-item" id="menu">
            <a class="nav-link" href="#" id="ats">ATASAN</a>
                {{-- fill topwear --}}
                <ul class="ani-menu">
                    <li><a href="/kaos">Kaos</a></li>
                    <li><a href="/polo">Polo</a></li>
                    <li><a href="/sweater">Sweater</a></li>
                    <li><a href="/kemeja">Kemeja</a></li>
                </ul>
        </li>
        <li class="nav-item" id="menu">
            <a class="nav-link" href="#lpgirl" id="out">OUTWEAR</a>
                {{-- fill outwear --}}
                <ul class="ani-menu">
                    <li><a href="/hoodie">Hoodie</a></li>
                    <li><a href="/bomber">Bomber</a></li>
                    <li><a href="/varsity">Varsity</a></li>
                </ul>
        </li>
        <li class="nav-item" id="menu">
            <a class="nav-link" href="#lptkid" id="bot">CELANA</a>
                {{-- fill pants --}}
                <ul class="ani-menu">
                    <li><a href="/jeans">Jeans</a></li>
                    <li><a href="/chino">Chino</a></li>
                    <li><a href="/sweatpants">SweatPants</a></li>
                    <li><a href="/ankle">Ankle</a></li>
                    <li><a href="/cargo">Cargo</a></li>
                </ul>
        </li>
        <li class="nav-item">
            {{-- sport product --}}
            <a class="nav-link" href="#lptbaby" id="spt">SPORT</a>
        </li>
    </ul>
    <div style="position: absolute; left: 1220px; top: 15px;">
        {{-- <a href=""><img src="{{ asset("img/fav.png") }}" alt="" style="position: absolute; left: -100px; top: 14px"></a> --}}
        {{-- <?php
            $pesanan_utama = \App\Models\Pesanan::where('user_id', $id)->where('status', 0)->first;
            $notif = \App\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count();
        ?> --}}
        <a href="{{ url('check-out') }}"><img src="{{ asset("img/cart.png") }}" alt="" style="position: absolute; left: -80px; top: 14px;"><span class="badge badge-danger"></span></a>
        <a href="{{ url('profile') }}"><img src="{{ asset("img/user.png") }}" alt="" style="position: absolute;  left: -5px; top: 13px"></a>
    </div>
</nav> 
<nav class="navbar navbar-expand-sm justify-content-center sticky-top"  id="gender">
    <ul class="navbar-nav">

        {{-- Navbar text --}}
        <li class="nav-item">
            <a class="nav-link" href="#lpman" id="pria">Pria</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#lpgirl" id="wanita">Wanita</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#lptkid" id="anak">Anak-Anak</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#lptbaby" id="bayi">Bayi</a>
        </li>
    </ul>

    {{-- logo in navbar --}}
    <div style="position: absolute; left: 1220px; top: 15px;">
        <a href="{{ url('check-out') }}"><img src="{{ asset("img/cart.png") }}" alt="" style="position: absolute; left: -80px; top: 14px;"></a>
        <a href="{{ url('profile') }}"><img src="{{ asset("img/user.png") }}" alt="" style="position: absolute; left: -5px; top: 13px;"></a>
    </div>
</nav> 

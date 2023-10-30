@extends('layout.produk')


@section('container')

<div class="container">
    
    <br><h1><a href="/pria" class="ttl">PRIA</a></h1><br><hr><br>

    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 15rem; ">
                <img src="{{ asset('img/koleksipria/kemeja.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">H&M - Regular Fit Oxford</h5>
                    <p class="card-text" style="margin-bottom: 0;">Kondisi : premium</p>
                    <p class="card-text">Ukuran : L</p>
                    <p>Rp499.000</p>
                    <a href="{{ url('pesan/{$id}') }}" class="btn btn-primary" style="font-style:italic" id="btn">NEXT</a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

</div>

    
    
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

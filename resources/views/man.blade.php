@extends('layout.produk')


@section('container')

<div class="container">
    
    {{-- product man collection cards --}}
    <br><h1><a href="" class="ttl">PRIA</a></h1><br><hr><br>

    <div class="row">
        @foreach ($barangs as $barang)
        <div class="col-md-3 mt-3 mb-5">
            <div class="card" style="width: 15rem; ">
                <img src="{{ asset('img/koleksipria') }}/{{ $barang->gambar }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                    <p class="card-text">{{ $barang->keterangan }}</p>
                    <p>Rp.{{ number_format($barang->harga) }}</p>
                    <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary" style="font-style:italic" id="btn">NEXT</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

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
